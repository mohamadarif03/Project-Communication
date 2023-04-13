<?php

namespace App\Http\Requests;

use App\Models\CommunicationType;
use Illuminate\Foundation\Http\FormRequest;

class CommunicationUpdateTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' =>  [
                'required',
                CommunicationType::unique(user::class)->ignore($this->route('id'))
            ],
        ];
    }
}
