<?php

namespace App\Http\Requests;

use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\In;

class ChangeStatusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'status' => ['required', Rule::in(Transaction::status)],
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'status_color' => Transaction::statusColor[$this->status]
        ]);
    }
}
