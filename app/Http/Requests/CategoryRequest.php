<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CategoryRequest extends FormRequest
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
                $nama = 'required|unique:categories,nama,'.$id;
                $deskripsi = 'required';
                $gambar_kategori = 'image|mimes:jpeg,png,jpg,gif|max:2048';
            }

            $slug = 'unique:categories,slug,'.$id;

        } else {
            $nama = 'required|unique:categories,nama,NULL,id';
            $slug = 'unique:categories,slug';
            $deskripsi = 'required';
            $gambar_kategori = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            
        }

        if ($this->method() == 'PUT')
        {
        return [
            'nama' => $nama,
            'slug' => $slug,
            'deskripsi' => $deskripsi,
            'gambar_kategori' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
        }
        else{
            return [
                'nama' => $nama,
                'slug' => $slug,
                'deskripsi' => $deskripsi,
                'gambar_kategori' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
        }
    }
}
