@extends('admin.layout.main')
@section('title', 'Tạo mới tài khoản')
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
                        <li class="breadcrumb-item active">Tạo mới nhóm quyền</li>
                     </ol>
                  </div>
                  <h4 class="page-title">Tạo mới nhóm quyền</h4>
               </div>
            </div>
         </div>
         <!-- end page title --> 
         <div class="row">
            <div class="col-12">
               <div class="card-box">
                  <h4 class="header-title mb-4">Tạo mới nhóm quyền</h4>
                  <div class="row">
                     <div class="col-xl-6">
                        <form action="{{route('role.store')}}" method="post">
                           @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">Tên nhóm quyền (*)</label>
                              <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                              @if($errors->first('name'))
                                 <p class="text-danger">{{ $errors->first('name') }}</p>
                              @endif
                           </div>
                           <div class="form-group">
                              <label>Chon nhóm chức năng (*)</label>
                              <div class="mt-3">
                                 @foreach($permission as $permissions )
                                    <div>
                                       <input class="checkbox" name="permission[]" value="{{$permissions->id}}" type="checkbox"  >
                                       <label class="label" for="customCheck1">{{$permissions->name}}</label>
                                    </div>
                                 @endforeach
                              </div>
                              @if($errors->first('permission'))
                                 <p class="text-danger">{{ $errors->first('permission') }}</p>
                              @endif
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                     </div>
                  </div>
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