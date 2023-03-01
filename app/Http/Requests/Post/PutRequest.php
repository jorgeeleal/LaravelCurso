<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{

    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         //'slug' => Str::slug($this->title)
    //         'slug' => str($this->title)->slug()
            
    //     ]);
    // }

    
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
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:posts,slug,'.$this->route('post')->id,
            'content' => 'required|min:7',
            'description' => 'required|min:7',  
            'image' => 'mimes:jpg,jpeg,png|max:10240',
            'posted' => 'required', 
            'category_id' => 'required|integer'
        ];
    }
}
