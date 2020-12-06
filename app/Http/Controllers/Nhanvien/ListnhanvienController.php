<?php

namespace App\Http\Controllers\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddStaff;
use App\Http\Requests\ValidateEditStaff;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Position;
use RealRashid\SweetAlert\Facades\Alert;

class ListnhanvienController extends Controller
{
 
    public function index()
    {
        $listStaffs = Staff::all();
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs]);

    }
    public function create()
    {
        $listPosition = Position::all();
        return view('admin.nhanvien.list-nhanvien.add',['listPosition'=>$listPosition]);
    }
    public function store(ValidateAddStaff $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('staff',$new_image);
        $staffs = new Staff;
        $staffs->code = $request->code;
        $staffs->name = $request->name;
        $staffs->gender = $request->gender;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->status = $request->status;
        $staffs->contract = $request->contract;
        $staffs->wage = $request->wage;
        $staffs->position = $request->position;
        $staffs['avatar'] = $new_image;
        $staffs->save();
        Alert()->success('thành công','bạn đã thêm nhân viên thành công');
        return redirect()->route('listnhanvien');
    }

    public function show($id)
    {
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.detail',['listStaffs'=>$listStaffs]);
    }

    public function edit($id)
    {
        $listPosition = Position::all();
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.edit',['listStaffs'=>$listStaffs, 'listPosition'=>$listPosition]);
    }
    public function update(ValidateEditStaff $request, $id)
    {
         $get_image = $request->file('avatar');
         if($get_image){
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
             $get_image->move('staff',$new_image);
             $staffs = new Staff;
             $arr['code'] = $request->code;
             $arr['name'] = $request->name;
             $arr['gender'] = $request->gender;
             $arr['phone'] = $request->phone;
             $arr['email'] = $request->email;
             $arr['address'] = $request->address;
             $arr['contract'] = $request->contract;
             $arr['wage'] = $request->wage;
             $arr['position'] = $request->position;
             $arr['status'] = $request->status;
             $staffs['avatar'] = $new_image;
             $staffs->where('id', $id)->update($arr);
         }else{
             $staffs = new Staff;
             $arr['code'] = $request->code;
             $arr['name'] = $request->name;
             $arr['gender'] = $request->gender;
             $arr['phone'] = $request->phone;
             $arr['email'] = $request->email;
             $arr['address'] = $request->address;
             $arr['contract'] = $request->contract;
             $arr['wage'] = $request->wage;
             $arr['position'] = $request->position;
             $arr['status'] = $request->status;
             $staffs->where('id', $id)->update($arr);
         }
        Alert()->success('Thành công','bạn đã sửa nhân viên thành công');
        return redirect()->action('Nhanvien\ListnhanvienController@index');
    }
    public function destroy($id)
    {
        Staff::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa nhân viên thành công');
        return back();
    }
}
