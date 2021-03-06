<?php

namespace App\Http\Controllers\Dichvu;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Customer;
use App\Http\Requests\ValidateFormAddService;
use App\Http\Requests\ValidateFormEditService;

class ServiceController extends Controller
{

    public function index(Request $request)
    {

        $listService = Service::paginate(5);
        if ($request->ajax()) {
            return view('admin.service.index', compact('listService'));
        }
        return view('admin.service.pagination', compact('listService'));
    }

    public function create()
    {

        $data_packages = Package::all();
        $data = Customer::all();
        return view('admin.service.add', compact('data', 'data_packages'));
    }


    public function store(ValidateFormAddService $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->id_package = $request->id_package;
        $service->id_customer = $request->id_customer;
        $service->status = $request->status;
        $service->start_date = $request->start_date;
        $service->end_date = $request->end_date;
        $service->active_date = $request->active_date;
        $service->total_package = $request->total_package;
        $service->customers_pay = $request->customers_pay;
        $service->pay_method = $request->pay_method;
        $service->save();
        Alert()->success('Thành công', 'Thêm ca làm việc thành công');
        return redirect()->route('service');
    }
    public function show($id)
    {
        //

    }
    public function edit($id)
    {
        $service = Service::find($id);
        $package = Package::all();
        $customer = Customer::all();
        return view('admin.service.edit', compact('service', 'package', 'customer'));
    }
    public function update(ValidateFormEditService $request, $id)
    {
        $service = new Service;
        $arr['name'] = $request->name;
        $arr['id_package'] = $request->id_package;
        $arr['id_customer'] = $request->id_customer;
        $arr['status'] = $request->status;
        $arr['start_date'] = $request->start_date;
        $arr['end_date'] = $request->end_date;
        $arr['active_date'] = $request->active_date;
        $arr['total_package'] = $request->total_package;
        $arr['customers_pay'] = $request->customers_pay;
        $arr['pay_method'] = $request->pay_method;
        $service::where('id', $id)->update($arr);
        Alert()->success('Thành công', 'Cập nhật ca làm việc thành công');
        return redirect()->route('service');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        Alert()->success('Thành công', 'Xóa ca làm việc thành công');
        return redirect()->route('service');
    }
}