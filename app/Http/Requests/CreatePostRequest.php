<?php

namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class CreatePostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // in this case all authorise
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'post_title' =>  'required|min:3',
            'post_excerpt' => 'required'    
        ];


        return $rules;
    }
}
