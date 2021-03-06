<?php

namespace App\Http\Controllers\KhachHang;

use App\Models\Hymnal;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Package\PackageRequest;
use App\Http\Requests\Package\PackageEditRequest;

class PackageController extends Controller
{
	//
	public function index(Request $request)
	{
		$package = Package::paginate(5);
		if ($request->ajax()) {
			return view('admin.package.index', compact('package'));
		}
		return view('admin.package.pagination', compact('package'));
	}

	public function create()
	{
		$catap = Hymnal::All();
		return view('admin.package.add', compact('catap'));
	}
	public function add(PackageRequest $request)
	{
		$package = new Package;
		$package->name = $request->name;
		$package->price = $request->price;
		$package->type_use = $request->type_use;
		$package->status = $request->status;
		$package->free_service = $request->free_service;
		$package->desc = $request->desc;
		$package->start_date = $request->start_date;
		$package->end_date = $request->end_date;
		// dd($package);

		$package->save();
		Alert()->success('Thành công', 'Thêm gói cước thành công');
		return redirect()->route('package.index');
	}
	public function edit($id)
	{
		$package = Package::where('id', $id)->get();
		$catap = Hymnal::All();
		return view('admin.package.edit', compact('package', 'catap'));
	}
	public function update(PackageEditRequest $request, $id)
	{
		$package = Package::find($id);
		$package->name = $request->name;
		$package->price = $request->price;
		$package->type_use = $request->type_use;
		$package->status = $request->status;
		$package->free_service = $request->free_service;
		$package->desc = $request->desc;
		$package->start_date = $request->start_date;
		$package->end_date = $request->end_date;
		$package->update();
		Alert()->success('Thành công', 'Cập nhật gói cước thành công');
		return redirect()->route('package.index');
	}
	public function delete($id)
	{
		$package = Package::find($id);
		$package->delete();
		Alert()->success('Thành công', 'Xóa gói cước thành công');
		return redirect()->route('package.index');
	}
}