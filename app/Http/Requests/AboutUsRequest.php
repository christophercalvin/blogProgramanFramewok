<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
                $judul = 'required|unique:about_us,judul,'.$id;
                $deskripsi = 'required';
            }

        } else {
            $judul = 'required';
            $deskripsi = 'required';
        }

        return [
            'judul' => $judul,
            'deskripsi' => $deskripsi,
        ];
    }
}
