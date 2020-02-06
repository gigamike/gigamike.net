<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
          'name' => 'required|max:255|unique:App\Portfolio,name',
          'description' => 'nullable',
          'url' => 'nullable|url',
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=500,min_height=280',
          'stacks' => 'required',
          'portfolio_tag_id' => 'required',
      ];
    }
}
