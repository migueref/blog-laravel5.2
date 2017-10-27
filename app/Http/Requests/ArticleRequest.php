<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            'title' => 'min:10|max:250|required|unique:articles',
      			'category_id' => 'required',
      			'content'	=>	'min:2|required',
      			'image'		=>	'between:1,500|image|required'
        ];
    }
}
