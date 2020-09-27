<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::id())],
            'phone' => ['nullable', new PhoneNumberRule],
            'photo' => ['nullable', 'image', 'max:1024'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore(Auth::id())],
            'birthdate' => ['nullable', 'date'],
            //'private' => ['required', 'boolean'],
        ];
    }
}
