<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'competition_id' => ['required', 'integer', 'exists:competitions,id'],
            'competition_name' => ['required', 'string', 'max:255'],
            'competition_level' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:date'],
            'competition_requirtment' => ['required', 'string', 'max:1024'],
            'competition_location' => ['required', 'string', 'max:255'],
            'number_of_team' => ['required', 'integer'],
        ];
    }

}