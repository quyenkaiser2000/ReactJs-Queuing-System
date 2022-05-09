<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class ResetPasswordController extends Controller
{
    /**
     * Create token password reset.
     *
     * @param  ResetPasswordRequest $request
     * @return JsonResponse
     */
    public function sendMail(Request $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        $token = $passwordReset->token;
        $email_to =$passwordReset->email;
        Mail::send('login.sendemail',compact('token'),function($message) use ($email_to){
            $message->from($email_to,'Reset password');
            $message->to($email_to, $email_to);
            $message->subject('Reset password');

        });
        
  
        return redirect('/send-mail')->with('message', 'We have e-mailed your password reset link!');
    }
    public function showreset(Request $request, $token){
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        $token = $passwordReset->token;
        return view('login.forgotpas',compact('token'));
    }
    public function reset(Request $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return response()->json([
                'message' => 'This password reset token is invalid.',
            ], 422);
        }
        $user = User::where('email', $passwordReset->email)->firstOrFail();
        $passwordnew = Hash::make($request->password);
        $user->password = $passwordnew;
        $user->save();
        $passwordReset->delete();

        return redirect('/');
    }
}
