<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'title' => "required|min:5|max:500",
            'slug' => "min:5|max:500",
            'content' => "required|min:7",
            'description' => "required|min:7",  
            'posted' => "required", 
            'category_id' => "required|integer"
        ];
    }
}
