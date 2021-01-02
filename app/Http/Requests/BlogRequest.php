<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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

        if ($this->method() == 'PUT')
        {
            $judul = 'required'. $this->get('id');
            $deskripsi= 'required'. $this->get('id');
            $id_categories= 'required';
            $gambar = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            
        } else {
            $judul = 'required|unique:blogs,judul,';
            $deskripsi= 'required';
            $id_categories = 'required';
            $gambar = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        if ($this->method() == 'PUT')
        {
        return [
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'id_categories' => $id_categories,
            'gambar' => 'mimes:jpeg,png,jpg,gif|max:2048',
        ];
         }
         else{
            return [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'id_categories' => $id_categories,
                'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            ];
         }
    }
}
