<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'kondisi' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Kolom image wajib diisi',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'File harus memiliki ekstensi jpeg, png, atau jpg',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
            'nama.required' => 'Kolom nama wajib diisi',
            'berat.required' => 'Kolom berat wajib diisi',
            'harga.required' => 'Kolom berat harga diisi',
            'kondisi.required' => 'Kolom kondisi wajib diisi',
            'stok.required' => 'Kolom berat stok diisi',
            'deskripsi.required' => 'Kolom deskripsi wajib diisi',
            'deskripsi.max' => 'The deskripsi must not be greater than 2000 characters',
        ];
    }
}
