<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    protected $redirect = '/register';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'pantonimyc' => 'required',
            'login' => 'required|unique:users,login',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password-repeat' => 'required|same:password',
        ];
    }
}
