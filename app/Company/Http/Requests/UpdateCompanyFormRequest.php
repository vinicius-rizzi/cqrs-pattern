<?php

namespace App\Company\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyFormRequest extends FormRequest
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
            'name' => 'sometimes|required|string',
            'company_id' => 'sometimes|required|string',
        ];
    }
}
