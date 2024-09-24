<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerView()
    {
        return view ('register-parent');
    }
    public function registerNew(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            // Add validation rules for each input field
            'child_name' => 'required|string',
            'child_ic' => 'required|string',
            'child_age' => 'required|integer|min:0',
            'child_dob' => 'required|date',
            'child-passport' => 'nullable|string', // Assuming it's optional
            'child_nationality' => 'required|string',
            'child_race' => 'required|string',
            'child_bp' => 'required|string',
            'child_religion' => 'required|string',
            'child_sex' => 'required|string',
            'child_address' => 'required|string',
            'child_posscode' => 'required|string',
            'child_city' => 'required|string',
            'child_country' => 'required|string',
            'pediatricians' => 'nullable|string',
            'recommend' => 'nullable|string',
            'deadline' => 'nullable|string',
            'diagnosis' => 'nullable|string',
            'occ_therapy' => 'nullable|string',
            'sp_therapy' => 'nullable|string',
            'others' => 'nullable|string',
            'father_name' => 'required|string',
            'father_phone' => 'required|string',
            'father_ic' => 'required|string|max:12',
            'father_race' => 'required|string',
            'father_occ' => 'required|string',
            'father_email' => 'required|email',
            'father_address' => 'required|string',
            'father_posscode' => 'required|string',
            'father_city' => 'required|string',
            'father_work_address' => 'required|string',
            'father_work_posscode' => 'required|string',
            'father_work_city' => 'required|string',
            'mother_name' => 'required|string',
            'mother_phone' => 'required|string',
            'mother_ic' => 'required|string|max:12',
            'mother_race' => 'required|string',
            'mother_occ' => 'required|string',
            'mother_email' => 'required|email',
            'mother_address' => 'required|string',
            'mother_posscode' => 'required|string',
            'mother_city' => 'required|string',
            'mother_work_address' => 'required|string',
            'mother_work_posscode' => 'required|string',
            'mother_work_city' => 'required|string',
            'house_income' => 'required|string',
            'parent_sign' => 'required|string',
            'sign_date' => 'required|date',
            'sign_name' => 'required|string',
            'sign_time' => 'required|string',
            'agree_disagree' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',

        ]);

        // Create a new ChildInfo record
        $childInfo = ChildInfo::create([
            'child_name' => $validatedData['child_name'],
            'child_ic' => $validatedData['child_ic'],
            'child_age' => $validatedData['child_age'],
            'child_dob' => $validatedData['child_dob'],
            'child_passport' => $validatedData['child-passport'],
            'child_nationality' => $validatedData['child_nationality'],
            'child_race' => $validatedData['child_race'],
            'child_bp' => $validatedData['child_bp'],
            'child_religion' => $validatedData['child_religion'],
            'child_sex' => $validatedData['child_sex'],
            'child_address' => $validatedData['child_address'],
            'child_posscode' => $validatedData['child_posscode'],
            'child_city' => $validatedData['child_city'],
            'child_country' => $validatedData['child_country'],
            'pediatricians' => $validatedData['pediatricians'],
            'recommend' => $validatedData['recommend'],
            'deadline' => $validatedData['deadline'],
            'diagnosis' => $validatedData['diagnosis'],
            'occ_therapy' => $validatedData['occ_therapy'],
            'sp_therapy' => $validatedData['sp_therapy'],
            'others' => $validatedData['others'],
            'house_income' => $validatedData['house_income'],
        ]);
       
        // Create a new FatherInfo record linked to ChildInfo
        $fatherInfo = FatherInfo::create([
             // Set child_id with the ID of the associated ChildInfo
        // Assign fatherInfo fields
        'child_id' => $childInfo->id, // Link to ChildInfo
        'father_name' => $validatedData['father_name'],
        'father_phone' => $validatedData['father_phone'],
        'father_ic' => $validatedData['father_ic'],
        'father_race' => $validatedData['father_race'],
        'father_occ' => $validatedData['father_occ'],
        'father_email' => $validatedData['father_email'],
        'father_address' => $validatedData['father_address'],
        'father_posscode' => $validatedData['father_posscode'],
        'father_city' => $validatedData['father_city'],
        'father_work_address' => $validatedData['father_work_address'],
        'father_work_posscode' => $validatedData['father_work_posscode'],
        'father_work_city' => $validatedData['father_work_city'],
        ]);

        // Create a new MotherInfo record linked to ChildInfo
        $motherInfo = MotherInfo::create([
            'child_id' => $childInfo->id,
            'mother_name' => $validatedData['mother_name'],
            'mother_phone' => $validatedData['mother_phone'],
            'mother_ic' => $validatedData['mother_ic'],
            'mother_race' => $validatedData['mother_race'],
            'mother_occ' => $validatedData['mother_occ'],
            'mother_email' => $validatedData['mother_email'],
            'mother_address' => $validatedData['mother_address'],
            'mother_posscode' => $validatedData['mother_posscode'],
            'mother_city' => $validatedData['mother_city'],
            'mother_work_address' => $validatedData['mother_work_address'],
            'mother_work_posscode' => $validatedData['mother_work_posscode'],
            'mother_work_city' => $validatedData['mother_work_city'],
            // Add other fields from MotherInfo table
        ]);

        // Create a new ParentPermission record linked to ChildInfo
        $parentPermission = ParentsPermission::create([
            'child_id' => $childInfo->id,
            'parent_sign' => $validatedData['parent_sign'],
            'sign_date' => $validatedData['sign_date'],
            'sign_name' => $validatedData['sign_name'],
            'sign_time' => $validatedData['sign_time'],
            'agree_disagree' => $validatedData['agree_disagree'],
        ]);
        
        $parentAccount = ParentAccount::create([
            'child_id' => $childInfo->id,
            'password' => bcrypt($validatedData['password']),
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
        ]);
        // Optionally, you can add additional logic or redirection here

        // Redirect the user after successful form submission
        return view('rules', ['childInfo' => $childInfo, 'motherInfo' => $childInfo->motherInfo, 
        'fatherInfo' => $childInfo->fatherInfo, 'parentPermission' => $childInfo->parentPermission]);
    }
    public function rulesView($id)
    {
        $childInfo = ChildInfo::with('motherInfo','fatherInfo', 'parentPermission')->find($id);

        if (!$childInfo) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and motherInfo details to the view
        return view('rules', ['childInfo' => $childInfo, 'motherInfo' => $childInfo->motherInfo, 
        'fatherInfo' => $childInfo->fatherInfo, 'parentPermission' => $childInfo->parentPermission]);
    }
    public function consentView($id)
    {
        $childInfo = ChildInfo::with('motherInfo','fatherInfo', 'parentPermission')->find($id);

        if (!$childInfo) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and motherInfo details to the view
        return view('/custConsent', ['childInfo' => $childInfo, 'motherInfo' => $childInfo->motherInfo, 
        'fatherInfo' => $childInfo->fatherInfo, 'parentPermission' => $childInfo->parentPermission]);
    }
    public function declareView($id)
    {
        $childInfo = ChildInfo::with('motherInfo','fatherInfo', 'parentPermission')->find($id);

        if (!$childInfo) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and motherInfo details to the view
        return view('custDeclare', ['childInfo' => $childInfo, 'motherInfo' => $childInfo->motherInfo, 
        'fatherInfo' => $childInfo->fatherInfo, 'parentPermission' => $childInfo->parentPermission]);
    }
    public function packageView(Request $request, $child_id)
    {
        $packages = Package::all();
        return view('package', compact('packages', 'child_id'));
    }

    public function packageProceedView($child_id, $package_id)
    {
        $package = Package::find($package_id);

        if (!$package) {
            abort(404);
        }

        return view('packageProceed', [
            'package' => $package,
            'child_id' => $child_id
        ]);
    }
    public function packageProceed(Request $request, $child_id, $package_id)
    {
        $childInfo = ChildInfo::find($child_id);

        if (!$childInfo) {
            abort(404);
        }

        $childInfo->package = $request->input('package_name');
        $childInfo->save();

        $package = Package::find($package_id); // Ensure you get the package here

        if (!$package) {
        abort(404);
    }

        return view('childSchedule', [
            'package' => $package,
            'child_id' => $child_id
        ]);
        
    }
    public function childScheduleView($child_id, $package_id)
    {
        $childInfo = ChildInfo::find($child_id);
        $package = Package::find($package_id);

        if (!$childInfo || !$package) {
            abort(404);
        }

        return view('childSchedule', [
            'package' => $package,
            'childInfo' => $childInfo,
            'child_id' => $child_id
        ]);
    }
    public function childSchedule(Request $request, $child_id, $package_id)
    {
        $childInfo = ChildInfo::find($child_id);
        $package = Package::find($package_id);

        if (!$childInfo || !$package) {
            abort(404);
        }

        $sessionsPerMonth = $package->session_quantity;
        $totalPrice = $request->input('totalPrice');

        // Calculate the number of sessions per week
        $sessionsPerWeek = $sessionsPerMonth / 4;

        for ($week = 1; $week <= 4; $week++) {
            for ($i = 1; $i <= $sessionsPerWeek; $i++) {
                $day = $request->input('day' . $i);
                $time = $request->input('time' . $i);
                $session = $i + ($week - 1) * $sessionsPerWeek;

                if ($day && $time) {
                    $childSchedule = new ChildSchedule();
                    $childSchedule->child_id = $child_id;
                    $childSchedule->session = $session; 
                    $childSchedule->day = $day;
                    $childSchedule->time = $time;
                    $childSchedule->price = $totalPrice;
                    $childSchedule->save();
                }
            }
        }

        return view('childSchedule', [
            'package' => $package,
            'childInfo' => $childInfo,
            'totalPrice' => $totalPrice,
            'child_id' => $child_id
        ]);
    }
}
