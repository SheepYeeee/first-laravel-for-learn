<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
{
    /**
     * 取得使用者是否授權執行此請求
     * 
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * 取得請求的驗證規則
     * 
     * @return array
     */
    public function rules(){
        return [
            'email'=>'required|string|email',
            'password'=>'required|string|min:4'
        ];
    }
}
