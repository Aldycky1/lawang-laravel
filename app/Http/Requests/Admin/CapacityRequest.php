<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CapacityRequest extends FormRequest
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
            'person' => 'required|string',
            'price' => 'required|integer',
            'tourist_attractions_id' => 'required|exists:tourist_attractions,id',
            'tourist_packages_id' => 'required|exists:tourist_packages,id',
            'hotels_id' => 'required|exists:hotels,id',
        ];
    }
}
