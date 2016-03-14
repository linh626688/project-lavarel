<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',

        ];
    }
    public function message()
    {
        return [

            'name.required' => 'Vui Lòng Nhập Họ Tên',
            'email.required' => 'Vui Lòng Nhập Email',
            'email.email' => 'Đây Không Phải là Email',
            'email.unired' => 'Email đã tồn tại',
            'password.required' => 'Vui Lòng Nhập Password',
        ];
    }

}
