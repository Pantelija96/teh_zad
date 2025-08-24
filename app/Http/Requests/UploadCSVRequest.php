<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadCSVRequest extends FormRequest
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
        return [
            'csv_file' => 'required|file|mimes:csv,txt'
        ];
    }

    public function messages(): array
    {
        return [
            'csv_file.required' => 'Morate izabrati CSV fajl.',
            'csv_file.mimes' => 'Dozvoljeni format je: csv.'
        ];
    }
}
