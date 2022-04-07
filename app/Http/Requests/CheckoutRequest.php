<?php

namespace App\Http\Requests;

use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'               => 'required|string',
            'email'              => 'required|email',
            'phone_number'       => 'required|string',
            'address'            => 'required|string',
            'city'               => 'required|string',
            'province'           => 'required|string',
            'zip_code'           => 'required|string',
            'transaction_total'  => 'required|int'
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'status' => Transaction::status['pending'],
            'status_color' => Transaction::statusColor['PENDING']
        ]);
    }
}
