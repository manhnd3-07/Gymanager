@extends('admin.main')
@section('title', 'Tạo mới nhân viên')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Gymanager</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Tạo mới nhân viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới nhân viên</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Sua nhân viên</h4>
                    <form action="{{route('staff.update',$listStaffs->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ma  nhan vien (*)</label>
                                        <input type="text" class="form-control" name="code" id="exampleInputEmail1" value="{{ $listStaffs->code}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $listStaffs->name}}">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select class="form-control" id="exampleSelect1" name="gender">
                                            <option value="Nam" {{ $listStaffs->gender == 'Nam' ? 'selected' : ''}}>Nam</option>
                                            <option value="Nữ" {{ $listStaffs->gender == 'Nữ' ? 'selected' : ''}}>Nữ</option>
                                        </select>
                                    </div>
                                    @error('gender')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" value="{{$listStaffs->new_image}}">
                                        {{-- <img src="{{asset('staff' .$listStaffs->new_image)}}" alt="" width="100px" height="100px"> --}}
                                    </div>
                                    @error('avatar')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại (*)</label>
                                        <input type="number" class="form-control" name="phone" id="exampleInputPassword1" value="{{ $listStaffs->phone}}">
                                    </div>
                                    @error('phone')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Đang làm" name="status" {{ $listStaffs->status == 'Đang làm' ? 'checked' : '' }}>
                                                <label for="inlineRadio1">Đang làm</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Nghỉ làm" name="status" {{ $listStaffs->status == 'Nghỉ làm' ? 'checked' : ''}}>
                                                <label for="inlineRadio2">Nghỉ làm</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('status')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email (*)</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputPassword1"  value="{{ $listStaffs->email}}">
                                    </div>
                                    @error('email')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input class="form-control" type="text" name="address"  value="{{ $listStaffs->address}}">
                                    </div>
                                    @error('address')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Loại hợp đồng (*)</label>
                                        <select class="form-control" id="exampleSelect1" name="contract">
                                            <option value="Chính thức" {{ $listStaffs->contract == 'Chính thức' ? 'selected' : ''}}>Chính thức</option>
                                            <option value="Thử việc" {{ $listStaffs->contract == 'Thử việc' ? 'selected' : ''}}>Thử việc</option>
                                        </select>
                                    </div>
                                    @error('contract')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input class="form-control" type="number" name="wage"  value="{{ $listStaffs->wage}}">
                                    </div>
                                    @error('wage')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chức danh</label>
                                        <select class="form-control" id="exampleSelect1" name="position">
                                            @foreach ($listPosition as $item)
                                                <option
                                                    <?php if($item->id == $listStaffs->position):?>
                                                        selected
                                                    <?php endif?>
                                                    >
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('title')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- end col -->
                        <!-- end row -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
@endsection()