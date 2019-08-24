<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            // 'name'  => 'required',
                    // 'id'  => 'required',
        // 'nome'  => 'required',
        // 'descricao'  => 'required',
        // 'custo'  => 'required',
        // 'preco'  => 'required',
        // 'data'  => 'required',
        // 'created_at'  => 'required',
        // 'updated_at'  => 'required',

        ];
    }
}
