<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\ResetPasswordMail;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRecovery()
    {
        return view('recovery');
    }
    
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $token = Str::random(60);
            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request->email],
                ['token' => Hash::make($token), 'created_at' => Carbon::now()]
            );
            Mail::to($user->email)->send(new ResetPasswordMail($token));
        }
        return back()->with('status', 'Se o e-mail existir em nossa base, um link de redefinição será enviado!');
    }


    public function showResetForm(Request $request, $token = null)
    {
        $tokenRecord = DB::table('password_reset_tokens')->where('token', $request->token)->first();
        if (!$tokenRecord) {
            $allTokens = DB::table('password_reset_tokens')->get();
            foreach ($allTokens as $record) {
                if (Hash::check($request->token, $record->token)) {
                    $tokenRecord = $record;
                    break;
                }
            }
        }

        if (!$tokenRecord) {
            return redirect()->route('password.request')->withErrors(['email' => 'Token de redefinição inválido.']);
        }

        return view('reset-password')->with(
            ['token' => $request->token, 'email' => $tokenRecord->email]
        );
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $passwordReset = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if (!$passwordReset || !Hash::check($request->token, $passwordReset->token)) {
            return back()->withErrors(['email' => 'Token inválido ou expirado.']);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Não encontramos um usuário com este e-mail.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect('/login')->with('status', 'Sua senha foi redefinida com sucesso!');
    }
}
