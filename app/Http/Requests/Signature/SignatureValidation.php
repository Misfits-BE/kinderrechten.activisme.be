<?php

namespace App\Http\Requests\Signature;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SignatureValidation
 *
 * @package App\Http\Requests\Signature
 */
class SignatureValidation extends FormRequest
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
            'name' => 'string|required|max:190',
            'email' => 'required|string|email|max:190|unique:signatures',
            'city' => 'string|required|max:190'
        ];
    }
}
