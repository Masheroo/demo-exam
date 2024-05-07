<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function regForm()
    {
        return view('auth.register');
    }

    public function registration(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patnonimyc = $request->pantonimyc;
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/')->with('message', 'Регистрация прошла успешно!');
    }

    public function authForm()
    {
        return view('auth.auth');
    }

    public function auth(LoginRequest $request)
    {
        $user = User::where(['login' => $request->login])->first();

        if (!$user || !Hash::check($request->password, $user->password)){
            return redirect('/auth')->with('error', 'Логин или пароль не правильный!');
        }

        Auth::login($user);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

