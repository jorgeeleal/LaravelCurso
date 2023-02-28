<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            //'slug' => Str::slug($this->title)
            'slug' => str($this->title)->slug()
            
        ]);
    }

    static public function myRules()
    {
        return [
            'title' => "required|min:3|max:50",
            'slug' => "required|min:3|max:100|unique:categories"
        ];
    }

    
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
        return $this->myRules();
    }
}
