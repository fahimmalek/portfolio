<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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

            'name' => 'required',

            'email' => 'required|email',

            //this validates that the password field matches password_confirmation
            'password' => 'required|confirmed'
            //
        ];
    }

    public function persist()
    {

            $user = User::create([

            'name' => request('name'),

            'email'=> request('email'),

            'password' => bcrypt(request('password'))
            
            ]);
        //sign in the user
        auth()->login($user);
    }
}
