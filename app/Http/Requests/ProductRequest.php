<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:225',
            'type'        => 'required|string|max:225',
            'description' => 'required|string',
            'price'       => 'required|integer',
            'quantity'    => 'required|integer',
//            'image'       => 'required|image',
//            'image.*'     => 'image'
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name)
        ]);
    }
}
