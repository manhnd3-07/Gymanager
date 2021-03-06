<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;
use App\Models\NewMember;
use App\Models\Service;

use App\Models\Staff;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Position;
use App\Models\PtProgram;
use App\Models\Post;

use App\User;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $countAccount = User::all()->count();
        $countStaff = Staff::all()->count();
        $countCustomer = Customer::all()->count();
        $countService = Service::all()->count();
        $countProduct = Product::all()->count();
        $pt = Position::where('name', 'Huấn luyện viên')->get();
        foreach ($pt as $pts) {
            foreach ($pts->staff as $staffs) {
                $countPt = Staff::where('id', $staffs->id)->get()->count();
            }
        }
        $blog = Post::all()->count();
        return view('admin.index', compact('countAccount', 'countStaff', 'countCustomer', 'countService', 'countProduct', 'countPt', 'blog'));
    }

    public function contact()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        Alert()->success('Thông báo', 'Bạn đã xóa thành công!!');
        return redirect()->back();
    }

    public function listForm()
    {
        $data['list'] = DB::table('new_members')->join('services', 'new_members.service', '=', 'services.id')
            ->get();
        // $list = NewMember::with('service')->orderBy('id','desc')->get();
        // foreach ($list as $list ) {
        //     $id_service = $list->service;
        // }

        // $service = Service::where('id', $id_service)->get();
        return view('admin.contact.new_member', $data);
    }

    public function deleteListForm($id)
    {
         NewMember::where('id',$id)->delete();
        
        Alert()->success('Thông báo!', 'Bạn đã xóa thành công!!');
        return back();
    }

    //  public function statusForm($id)
    // {
    //     $new_members = DB::table('new_members')->find($id);
    //     if($new_members->statuss == 0){
    //         DB::table('new_members')->where('id','=',$id)->update(['statuss'=>1]);
    //     }else{
    //         DB::table('new_members')->where('id','=',$id)->update(['statuss'=>0]);
    //     }
    //     return redirect()->back();
    // }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}