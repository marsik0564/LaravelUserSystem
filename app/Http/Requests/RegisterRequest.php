<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'string|required|unique:App\Models\User,login',
            'name' => 'string|required',
            'birthday' => 'string|required',
            'email' => 'email|required|unique:App\Models\User,email',
            'address' => 'string|required',
            'city' => 'string|required',
            'state' => 'string|required',
            'country' => 'string|required',
            'password' => 'string|required|confirmed',
        ];
    }
}
