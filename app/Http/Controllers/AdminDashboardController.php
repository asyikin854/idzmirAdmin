<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class AdminDashboardController extends Controller
{
    // List of Students (from child_infos table)
    public function listStudents()
    {
        // Fetch students from the child_infos table
        $students = DB::table('child_infos')->get();
        return view('admin.students.index', compact('students'));
    }

    // Dashboard method (fetch parents and display in dashboard view)
    public function index()
    {
        // Fetch parents from the parent_accounts table
        $parents = DB::table('parent_accounts')->get();

        // Pass the parents data to the view
        return view('admin.parents.index', compact('parents'));
    }

    // List of Parents (from parent_accounts table)
    public function listParents()
    {
        // Fetch parents from the parent_accounts table
        $parents = DB::table('parent_accounts')->get();
        
        // Pass the parents data to the view
        return view('admin.parents.index', compact('parents'));
    }

    // Show specific parent details
    public function showParent($id)
{
    // Fetch the parent data from the parent_accounts table
    $parent = DB::table('parent_accounts')->where('id', $id)->first();

    // Fetch all child data from the child_infos table where parent_id matches the parent id
    $children = DB::table('child_infos')->where('parent_id', $id)->get();

    // Pass both parent and children data to the view
    return view('admin.parents.show', compact('parent', 'children'));
}

// Method to show the schedule
public function showSchedules()
{
    // Fetch the schedule data from the child_schedules table and join it with child_infos to get child_name
    $schedules = DB::table('child_schedules')
        ->join('child_infos', 'child_schedules.child_id', '=', 'child_infos.id')
        ->select(
            'child_schedules.*', 
            'child_infos.child_name'
        )
        ->paginate(10);  // Keep paginate without get()

    // Pass the data to the view
    return view('admin.schedules.index', compact('schedules'));
}


public function edit($id)
{
    $schedule = DB::table('child_schedules')
        ->join('child_infos', 'child_schedules.child_id', '=', 'child_infos.id')
        ->where('child_schedules.id', $id)
        ->select('child_schedules.*', 'child_infos.child_name')
        ->first();

    return view('admin.schedules.edit', compact('schedule'));
}


public function update(Request $request, $id)
{
    // Validate the incoming data
    $validated = $request->validate([
        'session' => 'required',
        'therapist' => 'required',
        'date' => 'required|date',
        'time' => 'required',
        'price' => 'required|numeric',
        'status' => 'required',
        'remark' => 'nullable'
    ]);

    // Find the schedule and update it
    DB::table('child_schedules')->where('id', $id)->update([
        'session' => $validated['session'],
        'therapist' => $validated['therapist'],
        'date' => $validated['date'],
        'time' => $validated['time'],
        'price' => $validated['price'],
        'status' => $validated['status'],
        'remark' => $validated['remark']
    ]);

    // Redirect back to the schedules list
    return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully.');
}


}
