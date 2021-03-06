<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAddStaff extends FormRequest
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
            'gender' =>'required',
            'status'=>'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'phone' => 'required|max:11|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required||unique:staffs,email|email',
            'address' => 'required',
            'contract' => 'required',
            'wage' => 'required',
            'position' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'email.unique' => 'Email này đã có !',
            'avatar.image' => 'Phải nhập đúng định dạng file ảnh',
            'phone.min' => 'Số điện thoại không được ít hơn 10 số',
            'phone.max' => 'Số điện thoại không được nhiều hơn 11 số',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'work_sift_id'=>'Thời gian làm việc',
            'avatar' => 'Ảnh đại diện',
            'email' => 'email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'contract' => 'Loại hợp đồng',
            'wage'=>'Mức lương',
            'position' => 'Chức vụ',
            'status' => 'Trạng thái'
        ];
    }
}