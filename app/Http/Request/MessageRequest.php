<?php

namespace App\Http\Request;

use App\Contracts\FormRequest\IBaseRequest;

class MessageRequest extends BaseRequest implements IBaseRequest
{

    public function rules()
    {
        $rules = [
            'topic' => 'required | string ',
            'data' => 'required',
        ];

        return $rules;
    }
}
