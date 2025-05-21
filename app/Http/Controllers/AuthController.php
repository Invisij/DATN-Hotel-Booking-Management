<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            activity()->causedBy(Auth::user())->log('Người dùng đăng nhập thành công');

            if (Auth::user()->role == 'Customer') {
                Auth::logout();
                return redirect()->route('login.index')->with('failed', 'Tài khoản của bạn không được phép đăng nhập.');
            }

            // Điều hướng theo role
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('customer.index');
            } elseif (Auth::user()->role == 'Super') {
                return redirect()->route('dashboard.index');
            } elseif (Auth::user()->role == 'Receptionist') {
                return redirect()->route('transaction.index');
            }
        }
        return redirect()->route('login.index')->with('failed', 'Mật khẩu hoặc tài khoản không đúng');
    }

    public function logout()
    {
        $name = Auth::user()->name;
        Auth::logout();

        return redirect()->route('login.index')->with('success', 'Logout success, goodbye ' . $name);
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login.index')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
