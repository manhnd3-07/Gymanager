@extends('admin.layout.main')
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
                                {{-- <li class="breadcrumb-item active">Tạo mới nhân viên</li> --}}
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Tạo mới nhân viên</h4> --}}
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Thêm danh mục bài viết</h4>
                        <form action="{{route('cate_posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên thể loại (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Tên thể loại">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
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