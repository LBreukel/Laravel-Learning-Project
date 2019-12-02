<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatealchemyRequest extends FormRequest
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
        $cooking = $this->route('alchemy');
        return [
            //
            'name'        => 'required|max:50,'. $cooking->id,
            'attribute'   => 'required|max:256',
            'category'    => 'required',
            'guidenumber' => 'required',
            'type_id'     => 'required'
        ];
    }
}
