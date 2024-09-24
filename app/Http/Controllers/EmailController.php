<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\YourEmailMailable;

use Illuminate\Support\Facades\Mail;
use DB;



class EmailController extends Controller
{
    
    // Show compose email form
    public function compose()
    {
        $parents = DB::table('parent_accounts')->get();
        return view('admin.email.send', compact('parents')); // Pointing to the send.blade.php view
    }

    // Handle sending of email
    public function send(Request $request)
    {
        $request->validate([
            'to' => 'required|array',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $emails = $request->input('to');
        $subject = $request->input('subject');
        $messageBody = $request->input('message');

        foreach ($emails as $email) {
            Mail::raw($messageBody, function ($message) use ($email, $subject) {
                $message->to($email)->subject($subject);
            });
        }

        return redirect()->back()->with('success', 'Email sent successfully.');
    }

    // Display inbox with all notifications/messages sent to the user
    public function inbox()
    {
        // Assume logged-in user is a parent
        $userEmail = auth()->user()->email;

        // Fetch notifications sent to the logged-in user (adjust the table/logic as necessary)
        $messages = DB::table('notifications')->where('email', $userEmail)->get();

        return view('inbox', compact('messages'));
    }
}
