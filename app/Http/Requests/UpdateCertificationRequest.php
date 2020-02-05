<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCertificationRequest extends FormRequest
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
            'name' => 'required|max:255|unique:App\Certification,name,' . $this->route('certification'),
            'description' => 'nullable',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=380,min_height=360',
        ];
    }
}
