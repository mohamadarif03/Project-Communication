<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
                Rule::unique('users')->ignore($this->user()->id),
            ],
            'email' => [
                Rule::unique('users')->ignore($this->user()->id),
            ],
            'password' => 'same:confirmPassword',
            'profile' => 'mimes:jpg,jpeg,png'
        ];
        
    }
}
