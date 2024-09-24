<?php

namespace App\Http\Controllers;

use App\Models\ChildInfo;
use Illuminate\Http\Request;
use App\Models\ChildSchedule;
use App\Models\SessionReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class TherapistController extends Controller
{
    public function therapistDashboard()
    {
        $user = Auth::guard('therapist')->user();
        $therapistInfo = $user;
        $therapistName = $user->name;

        $childInfos = ChildInfo::whereHas('childSchedule', function($query) use ($therapistName) {
            $query->where('therapist', $therapistName);
        })->with(['childSchedule' => function($query) use ($therapistName) {
            $query->where('therapist', $therapistName);
        }])->get();

        $totalChild = $childInfos->count();
        $totalSchedule = ChildSchedule::where('therapist', $therapistName)->count();
        $sessionLeft = ChildSchedule::where('therapist', $therapistName)
        ->whereNull('attendance')
        ->count();
        $reportSubmitted = SessionReport::where('therapist', $therapistName)->count();

    $sessionDone = $totalSchedule - $sessionLeft;

        return view('dashboard/dashboard-therapist', compact('therapistInfo', 'totalChild', 'totalSchedule', 'sessionLeft', 'reportSubmitted', 'sessionDone'));
    }
    protected function getColorForPackage($packageName)
    {
        static $colors = [
            '#1a1a2e', '#28a745', '#ff0000', '#ffc107', '#17a2b8', '#6c757d', '#6610f2', '#e83e8c', '#fd7e14', '#007bff'
        ];
        static $assignedColors = [];

        if (!isset($assignedColors[$packageName])) {
            $assignedColors[$packageName] = array_shift($colors);
        }

        return $assignedColors[$packageName];
    }
    public function therapistSessions()
    {
        $user = Auth::guard('therapist')->user();
        $therapistName = $user->name;
    
        $schedules = ChildSchedule::where('therapist', $therapistName)
            ->with('childInfo')
            ->get();
    
        $events = $schedules->map(function ($schedule) {
            $formattedTime = $this->convertTimeFormat($schedule->time);
            $sessionDateTime = new \DateTime($schedule->date . ' ' . $schedule->time);
            $currentDateTime = new \DateTime();
    
            $color = '#1a1a2e'; // Default color
    
            if ($sessionDateTime < $currentDateTime) {
                $color = '#606060'; // Grey for past sessions
            }
    
            return [
                'title' => "\nSession: " . $schedule->childInfo->package . "\n" . $schedule->childInfo->child_name,
                'start' => $schedule->date . 'T' . $formattedTime,
                'details' => "Package: " . $schedule->childInfo->package . "<br>Session: " . $schedule->session . "<br>Date & Time: " . $schedule->date . " / " . $schedule->time .
                            "<br>Student: " . $schedule->childInfo->child_name,
                'attendance' => $schedule->attendance, // Add attendance info
                'url' => route('sessionDetails-therapist', ['date' => $schedule->date, 'time' => $schedule->time]),
                'color' => $color,
            ];
        });
    
        return view('therapist-session', compact('events', 'therapistName'));
    }
    public function therapistSessionDetails($date, $time)
    {
        $user = Auth::guard('therapist')->user();
        $therapistName = $user->name;

        $schedules = ChildSchedule::where('therapist', $therapistName)
            ->where('date', $date)
            ->where('time', $time)
            ->with('childInfo')
            ->get();

        return view('sessionDetails-therapist', compact('schedules', 'date', 'time'));
    }
    public function therapistStdAttendance(Request $request, $id)
    {
        $schedule = ChildSchedule::findOrFail($id);
        $schedule->attendance = $request->input('attendance');
        $schedule->remark = $request->input('remark');
        $schedule->save();

        return redirect()->back()->with('success', 'Schedule updated successfully.');
    }
    private function convertTimeFormat($time)
    {
        // Parse time string like "9.00 a.m." to "HH:MM:SS"
        try {
            $dateTime = \Carbon\Carbon::createFromFormat('g.i a', $time);
            return $dateTime->format('H:i:s');
        } catch (\Exception $e) {
            return null; // or handle the error as needed
        }
    }
    public function therapistStudents()
    {
        $user = Auth::guard('therapist')->user();
        $therapistName = $user->name;

        $childInfos = ChildInfo::whereHas('childSchedule', function($query) use ($therapistName) {
            $query->where('therapist', $therapistName);
        })->with(['childSchedule' => function($query) use ($therapistName) {
            $query->where('therapist', $therapistName);
        }])->get();

        return view('stdList-therapist', compact('childInfos'));
    }
    public function studentDetails($id)
    {
    // Get the logged-in therapist
        $user = Auth::guard('therapist')->user();

        if (!$user) {
            return redirect()->back()->with('error', 'Therapist information not found.');
        }

        $therapistName = $user->name;

        // Find the ChildInfo by ID and load its ChildSchedule where the therapist matches
        $childInfo = ChildInfo::where('id', $id)
            ->whereHas('childSchedule', function ($query) use ($therapistName) {
                $query->where('therapist', $therapistName);
            })
            ->with(['childSchedule' => function ($query) use ($therapistName) {
                $query->where('therapist', $therapistName);
            }])
            ->first();

        if (!$childInfo) {
            return redirect()->back()->with('error', 'Child information not found or not assigned to you.');
    }

    return view('stdDetails-therapist', compact('childInfo'));
    }
    public function therapistStdReportList()
    {
        $user = Auth::guard('therapist')->user();
        $therapistName = $user->name;

        $schedules = ChildSchedule::where('therapist', $therapistName)
            ->where('attendance', 'present')
            ->doesntHave('sessionReport')
            ->with('childInfo')
            ->get();

        return view('stdReportList-therapist', compact('schedules'));

    }
    
    public function therapistReportView($id)
    {
    // Get the logged-in therapist
        $user = Auth::guard('therapist')->user();

        // Check if the user has a related therapistInfo
        if (!$user) {
            // Handle the error gracefully, maybe redirect with a message
            return redirect()->back()->with('error', 'Therapist information not found.');
        }

        $therapistName = $user->name;

        // Find the ChildInfo by ID and load its ChildSchedule where the therapist matches
        $schedules = ChildSchedule::where('id', $id)
        ->with('childInfo')
        ->first();

    return view('sessionReport-therapist', compact('schedules', 'therapistName'));
    }

    public function therapistReportSubmit(Request $request)
    {

        $rules = [
            'schedules_id' => 'required',
            'status' => 'required|string',
            'std_name' => 'required|string',
            'std_ic' => 'required|string',
            'therapist' => 'required|string',
            'session_attended' => 'required',
            'date' => 'required|date',
            'treatment_provided' => 'required|string',
            'ques1_1' => 'nullable|in:0,1',
            'ques1_2' => 'nullable|in:0,1',
            'ques1_3' => 'nullable|in:0,1',
            'ques1_4' => 'nullable|in:0,1',
            'ques1_5' => 'nullable|in:0,1',
            'ques1_6' => 'nullable|in:0,1',
            'ques1_7' => 'nullable|in:0,1',
            'ques1_8' => 'nullable|in:0,1',
            'ques2_1' => 'nullable|in:0,1',
            'ques2_2' => 'nullable|in:0,1',
            'ques2_3' => 'nullable|in:0,1',
            'ques2_4' => 'nullable|in:0,1',
            'ques2_5' => 'nullable|in:0,1',
            'ques2_6' => 'nullable|in:0,1',
            'ques2_7a' => 'nullable|in:0,1',
            'ques2_7b' => 'nullable|in:0,1',
            'ques2_7c' => 'nullable|in:0,1',
            'ques2_7d' => 'nullable|in:0,1',
            'ques2_7e' => 'nullable|in:0,1',
            'ques2_7f' => 'nullable|in:0,1',
            'ques2_7g' => 'nullable|in:0,1',
            'ques2_8a' => 'nullable|in:0,1',
            'ques2_8b' => 'nullable|in:0,1',
            'ques2_8c' => 'nullable|in:0,1',
            'ques2_8d' => 'nullable|in:0,1',
            'ques2_8e' => 'nullable|in:0,1',
            'ques2_8f' => 'nullable|in:0,1',
            'ques2_8g' => 'nullable|in:0,1',
            'ques2_8h' => 'nullable|in:0,1',
            'ques2_8i' => 'nullable|in:0,1',
            'ques3_1' => 'nullable|in:0,1',
            'ques3_2' => 'nullable|in:0,1',
            'ques3_3' => 'nullable|in:0,1',
            'ques3_4' => 'nullable|in:0,1',
            'ques3_5' => 'nullable|in:0,1',
            'ques3_6' => 'nullable|in:0,1',
            'ques3_7' => 'nullable|in:0,1',
            'ques4_1a' => 'nullable|in:0,1',
            'ques4_1b' => 'nullable|in:0,1',
            'ques4_1c' => 'nullable|in:0,1',
            'ques4_1d' => 'nullable|in:0,1',
            'ques4_2' => 'nullable|in:0,1',
            'ques4_3' => 'nullable|in:0,1',
            'ques4_4' => 'nullable|string',
            'ques4_5' => 'nullable|string',
            'ques4_6' => 'nullable|in:0,1',
            'ques5_1' => 'nullable|in:0,1',
            'ques5_2' => 'nullable|string',
            'ques5_3' => 'nullable|in:0,1',
            'ques5_4' => 'nullable|in:0,1',
            'ques5_5' => 'nullable|in:0,1',
            'ques5_6' => 'nullable|in:0,1',
            'ques5_7a' => 'nullable|in:0,1',
            'ques5_7b' => 'nullable|in:0,1',
            'ques5_7c' => 'nullable|in:0,1',
            'ques5_8a' => 'nullable|in:0,1',
            'ques5_8b' => 'nullable|in:0,1',
            'ques5_8c' => 'nullable|in:0,1',
            'ques6_1a' => 'nullable|in:0,1',
            'ques6_1b' => 'nullable|in:0,1',
            'ques6_1c' => 'nullable|in:0,1',
            'ques6_1d' => 'nullable|in:0,1',
            'ques6_1e' => 'nullable|in:0,1',
            'ques6_1f' => 'nullable|in:0,1',
            'ques6_1g' => 'nullable|in:0,1',
            'ques7_1a' => 'nullable|in:0,1',
            'ques7_1b' => 'nullable|string',
            'ques7_1c' => 'nullable|string',
            'ques7_2a' => 'nullable|string',
            'ques7_2b' => 'nullable|string',
            'ques7_3' => 'nullable|in:0,1',
            'ques7_4' => 'nullable|in:0,1',
            'ques7_5' => 'nullable|string',
            'ques7_6' => 'nullable|in:0,1',
            'ques7_7' => 'nullable|in:0,1',
            'ques7_8' => 'nullable|in:0,1',
            'ques7_9' => 'nullable|in:0,1',
            'ques7_10' => 'nullable|in:0,1',
            'ques8_0' => 'nullable|string',
            'remark1' => 'nullable|string',
            'remark2' => 'nullable|string',
            'remark3' => 'nullable|string',
            'remark4' => 'nullable|string',
            'remark5' => 'nullable|string',
            'remark6' => 'nullable|string',
            'remark7' => 'nullable|string',
            'analysis' => 'nullable|string',
            'plan' => 'nullable|string',
        ];
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with errors and input data
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, continue with your logic
        $validated = $validator->validated();
        // dd($validated); // Uncomment this line for debugging

        // Create a SessionReport instance with the validated data
        SessionReport::create($validated);

        // Redirect to the therapistStdReportList view
        return redirect()->route('stdReportList-therapist');
    }
}
