<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectTeamRequest extends FormRequest
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
            'project_name' => 'required',
            'service_manager' => 'required',
            'office_manager' => 'required',
            'service_manager' => 'required',
            'gamedesigner_junior' => 'required',
            'gamedesigner_medior' => 'required',
            'gamedesigner_senior' => 'required',
            'experience_junior' => 'required',
            'experience_medior' => 'required',
            'experience_senior' => 'required',
            'productontwerp_junior' => 'required',
            'productontwerp_medior' => 'required',
            'productontwerp_senior' => 'required',
            'programmer_junior' => 'required',
            'programmer_medior' => 'required',
            'programmer_senior' => 'required',
            'story_junior' => 'required',
            'story_medior' => 'required',
            'story_senior' => 'required',
            'host' => 'required',
            'techniek' => 'required',
            'muziek' => 'required',
            'props' => 'required',
            'link' => 'required',
            'size' => 'required',
        ];
    }
}
