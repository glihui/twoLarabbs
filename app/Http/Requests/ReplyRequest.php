<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'contentMsg' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'contentMsg.required' => '内容不能为空',
            'contentMsg.min' => '内容必须至少两个字符',
        ];
    }

}
