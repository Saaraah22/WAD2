<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        'full_name' => 'required|max:255',
        'student_number' => 'required',
        'CL1' => 'required|max:2',
        'CL2' => 'required|max:2',
        'PE1' => 'required|max:2',
        'PE2' => 'required|max:2',
        'BM1' => 'required|max:2',
        'BM2' => 'required|max:2',
        'System1' => 'required|max:2',
        'System2' => 'required|max:2',
        'Pagbasa1' => 'required|max:2',
        'Pagbasa2' => 'required|max:2',
        'IT1' => 'required|max:2',
        'IT2' => 'required|max:2',
        'Stat1' => 'required|max:2',
        'Stat2' => 'required|max:2',
        'Web1' => 'required|max:2',
        'Web2' => 'required|max:2',
        'Soc1' => 'required|max:2',
        'Soc2' => 'required|max:2',
        ];
    }
}
