<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique(User::class)->ignore($this->route('id'))
            ],
            'role' => 'required',
            'email' => [
                'required','email',
                Rule::unique(User::class)->ignore($this->route('id'))
            ],
            'password' => 'required|same:password_confirmation',
        ];
    }
}
