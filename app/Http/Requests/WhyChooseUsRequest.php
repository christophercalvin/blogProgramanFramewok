<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhyChooseUsRequest extends FormRequest
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
        $id = (int) $this->get('id');

        if ($this->method() == 'PUT') {
            {
                $deskripsi = 'required|unique:why_choose_us,deskripsi,'.$id;
            }

        } else {
            $deskripsi = 'required';
        }

        return [
            'deskripsi' => $deskripsi,
        ];
    }
}
