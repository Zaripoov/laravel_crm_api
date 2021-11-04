<?php

namespace App\Modules\Pub\Auth\Request;

use App\Services\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Проверятся для прав и привелегии
        //Если пользователю запрещено использовать данный запрос, то возвращаем false, если разрешено то true
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
            //
            'email' => 'required',
            'password' => 'required',
        ];
    }
}
