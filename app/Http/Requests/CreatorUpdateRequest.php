<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatorUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $uuid = $this->creator ?? '';
        
        return [
            "name" => ['required', 'min:3', 'max:150', "unique:creators,name,{$uuid},uuid"],
            "about" => ['nullable', 'min:3', 'max:9999']
        ];
    }
}
