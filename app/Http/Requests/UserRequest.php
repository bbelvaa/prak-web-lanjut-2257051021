<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest{
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ];
    }
}