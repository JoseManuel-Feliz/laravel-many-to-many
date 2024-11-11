<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /* TODO refactoring all request data  */
        return [
            'project_title' => ['required', 'string', 'min:3', 'max:40'],
            'launch_date' => ['required', 'date'],
            'project_status' => ['required', 'boolean'],
            'repository_url' => ['required', 'url'],
            'project_thumbnail' => ['required', 'string', 'min:3', 'max:150'],
            'project_summary' => ['required', 'string', 'min:3', 'max:2000']
        ];
    }
    /*  TODO | CUSTOM MESSAGES */
}
