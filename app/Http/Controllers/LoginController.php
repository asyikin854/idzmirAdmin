<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminInfo;
use App\Models\ParentAccount;
use App\Models\TherapistInfo;
use App\Models\CsInfo;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = $this->attemptLogin($credentials['username'], $credentials['password']);

        if ($user) {
            Auth::guard($user['guard'])->loginUsingId($user['user']->id);
            return redirect()->route("{$user['guard']}.dashboard");
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    private function attemptLogin($username, $password)
    {
        $roles = [
            'admin' => AdminInfo::class,
            'parent' => ParentAccount::class,
            'therapist' => TherapistInfo::class,
            'cs' => CsInfo::class,
        ];

        foreach ($roles as $guard => $model) {
            $user = $model::where('username', $username)->first();
            if ($user && Hash::check($password, $user->password)) {
                return ['guard' => $guard, 'user' => $user];
            }
        }

        return null;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}


