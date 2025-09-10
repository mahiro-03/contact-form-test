<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); //login.blade.php
    }

    public function login(LoginRequest $request)
    {
        //バリデーションは自動的に実行される
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //↓ログイン成功　→ 管理画面へ遷移
            return redirect()->intended('/admin');
        }
        //認証失敗時
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }
}
