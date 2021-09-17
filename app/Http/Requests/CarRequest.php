<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'brand' => 'required|min:3|max:255',
            'logo' => 'sometimes|mimes:jpeg,bmp,png,gif|dimensions:min_width=100,min_height=100|max:50000000',
            'country' => 'min:3|max:255',
            'website' => 'min:3|max:255'
        ];
    }
}
