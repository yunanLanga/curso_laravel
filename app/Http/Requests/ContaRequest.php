<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
            'nome' => 'required',
            'valor' => 'required',
            'vencimento' => 'required',
        ];
    }

    public function messages(): array{
        return [
           'nome.required' => 'Campo nome eh obrigatorio',
           'valor.required' => 'Campo valor eh obrigatorio',
           'vencimento.required' => 'Campo vencimento eh obrigatorio',
        ];
    }
}
