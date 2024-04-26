<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OccupationRequest extends FormRequest
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
            'ID_CHAMBRE'=>'required|max:value',
            'ID',
            'DATE_DEBUT'=>'required|max:value',
            'DATE_FIN'=>'required|max:value',
            'HEURE_DEBUT',
            'HEURE_FIN'
        ];
    }
    public function massages()
    {
        return
        [


        ];
    }
}
