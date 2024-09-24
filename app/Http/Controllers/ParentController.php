<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\ChildSchedule;
use Illuminate\Support\Facades\Auth;

class parentController extends Controller
{
    public function parentDashboard()
    {
        $user = Auth::guard('parent')->user();
        $childInfo = $user->childInfo;

        if ($childInfo) {
            $fatherInfo = $childInfo->fatherInfo;
            $motherInfo = $childInfo->motherInfo;
            $parentPermission = $childInfo->parentPermission;
            $parentAccount = $childInfo->parentAccount;
            $childSchedule = $childInfo->childSchedule->first();
            $package = Package::where('package_name', $childInfo->package)->first();
            $sessionLeft = ChildSchedule::where('child_id', $childInfo->id)
            ->whereNull('attendance')
            ->count();
            $sessionPresent = ChildSchedule::where('child_id', $childInfo->id)
            ->where('attendance', 'present')
            ->count();
            $reportCount = $childInfo->childSchedule->filter(function ($schedule) {
                return $schedule->sessionReport !== null; 
            })->count();
            
            return view('/dashboard/dashboard-parent')
                ->with('childInfo', $childInfo)
                ->with('fatherInfo', $fatherInfo)
                ->with('motherInfo', $motherInfo)
                ->with('parentPermission', $parentPermission)
                ->with('parentAccount', $parentAccount)
                ->with('childSchedule', $childSchedule)
                ->with('package', $package)
                ->with('sessionLeft', $sessionLeft)
                ->with('sessionPresent', $sessionPresent)
                ->with('reportCount', $reportCount);
        }

         return Redirect::route('login')->with('error', 'The session has expired. Please return to the login page to log back into your account.');
    }
    private function getRelatedData()
    {
        $user = Auth::guard('parent')->user();
        $childInfo = $user->childInfo;

        if (!$childInfo) {
            // Redirect to the login page with a flash message
            return Redirect::route('login')->with('error', 'The session has expired. Please return to the login page to log back into your account.');
        }

        $fatherInfo = $childInfo->fatherInfo;
        $motherInfo = $childInfo->motherInfo;
        $parentPermission = $childInfo->parentPermission;
        $parentAccount = $childInfo->parentAccount;
        $childSchedule = $childInfo->childSchedule;
        $childSchedules = $childInfo->childSchedule->first();
        $package = Package::where('package_name', $childInfo->package)->first();

        // Load the related SessionReport data for the child's schedule

        return [
            'childInfo' => $childInfo,
            'fatherInfo' => $fatherInfo,
            'motherInfo' => $motherInfo,
            'parentPermission' => $parentPermission,
            'parentAccount' => $parentAccount,
            'childSchedule' => $childSchedule,
            'childSchedules' => $childSchedules,
            'package' => $package,
        ];
    }
    public function parentScheduleView()
    {
        $user = Auth::guard('parent')->user();
        $childInfo = $user->childInfo;
    
        $childSchedule = ChildSchedule::where('child_id', $childInfo->id)
            ->where('status', 'approved')
            ->with('childInfo')
            ->get();
    
        $events = $childSchedule->map(function ($schedule) {
            $formattedTime = $this->convertTimeFormat($schedule->time);
    
            $color = '#007bff'; // Default color (blue)
            if ($schedule->attendance === 'present') {
                $color = '#28a745'; // Green for present
            } elseif ($schedule->attendance === 'absent') {
                $color = '#dc3545'; // Red for absent
            }
    
            $details = "Package: " . $schedule->childInfo->package .
                "<br>Session: " . $schedule->session .
                "<br>Date & Time: " . $schedule->date . " / " . $schedule->time .
                "<br>Therapist: " . $schedule->therapist .
                "<br>Attendance: " . $schedule->attendance;
    
                if (is_null($schedule->attendance)) {
                    $details .= '<br><a href="' . route('schedule.view', ['id' => $schedule->id]) . '" class="btn btn-primary">Req reschedule</a>';
                }
    
            return [
                'title' => "Session " . $schedule->session . "\n" . $schedule->childInfo->package . "\n" . $schedule->therapist,
                'start' => $schedule->date . 'T' . $formattedTime,
                'attendance' => $schedule->attendance,
                'color' => $color,
                'details' => $details,
            ];
        });
    
        return view('/calendar-basic', compact('events'));
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
    public function parentProfile()
    {
        {
            $data = $this->getRelatedData();
            if ($data) {
                return view('profile-parent')->with($data);
            }
            return view('profile-parent')->with('error', 'No related data found');
        }

    }
}
