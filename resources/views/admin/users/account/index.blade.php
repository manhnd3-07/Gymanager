@extends('admin.layout.main')
@section('title', 'Tài khoản')
@section('content')
<div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box">

                  <h4 class="page-title">Tài khoản</h4>
               </div>
            </div>
         </div>
         <!-- end page title -->
         <div class="row">
            <div class="col-12">
               <div class="card-box">
                  <div class="responsive-table-plugin">
                     <div class="table-rep-plugin">
                        <div class="table-wrapper">
                           <div class="btn-toolbar">
                              <div class="btn-group dropdown-btn-group pull-right">
                                 <button type="button" class="btn btn-default"><a href="{{route('user.add')}}" class="active">Tạo mới</a></button>
                              </div>
                              <div class="dataTables_length" id="datatable_length">
                              </div>

                              <div id="datatable_filter" class="dataTables_filter" ><label><input id="myInput" type="text" placeholder="Tìm kiếm ..." class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                           </div>
                           <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                              <table id="tech-companies-1-clone" class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th id="tech-companies-1-col-0-clone">STT</th>

                                       <th data-priority="3" id="tech-companies-1-col-2-clone">Tên tài khoản</th>
                                       <th data-priority="3" id="tech-companies-1-col-2-clone">Phân quyền</th>
                                       <th data-priority="3" id="tech-companies-1-col-5-clone">Ảnh đại diện</th>
                                       <th data-priority="6" id="tech-companies-1-col-6-clone">Email</th>
                                        <th data-priority="3" id="tech-companies-1-col-5-clone">Số điện thoại</th>
                                       <th data-priority="3" id="tech-companies-1-col-5-clone">Nhân viên</th>
                                       <th data-priority="3" id="tech-companies-1-col-5-clone">Ngày tạo</th>
                                        <th data-priority="6" id="tech-companies-1-col-7-clone">Đăng nhập cuối</th>
                                       <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="myTable">
                                 @foreach($user as $key => $users)
                                    <tr>
                                       <th data-org-colspan="1" data-columns="tech-companies-1-col-0">{{$key+1}}</th>
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">{{$users->name}}</td>
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                          @foreach($users->role as $roles)
                                            {{$roles->name}} <br>
                                          @endforeach
                                       </td>
                                    @if($users->avatar)
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                          <img width="100px" src="{{asset('user/'.$users->avatar)}}"></td>
                                       @else
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                                <img width="100px" src="http://placehold.it/150x150">
                                          </td>
                                       @endif

                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5">{{$users->email}}</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">{{$users->phone}}</td>
                                       <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">{{$users->staff->name}}</td>
                                    @if($users->created_at)
                                        <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6">{{date('d-m-Y', strtotime($users->created_at))}}</td>
                                       @else
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6"></td>

                                       @endif
                                       @if($users->last_login)
                                        <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6">{{date('d-m-Y', strtotime($users->last_login))}}</td>
                                       @else
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6"></td>
                                       @endif
                                       <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                          <div class="btn-group mt-1 mr-1">
                                             <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="mdi mdi-format-list-bulleted-square"></i>
                                             </button>
                                             <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left:0px; transform: translate3d(0px, 29px, 0px);">
{{--                                                 <a class="dropdown-item  btn-show"  id="show_user" data-id ="{{$users->id}}" data-toggle="modal" data-target="#exampleModalCenter"><i class="mdi mdi-eye"></i> Chi tiết</a>--}}
                                                <a class="dropdown-item" href="{{route('user.edit',$users->id)}}"><i class="mdi mdi-account-edit"></i> Sửa</a>
                                                <a class="dropdown-item btn-remove" href="{{route('user.delete',$users->id)}}"><i class="mdi mdi-delete"></i> Xoá</a>

                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- end .table-responsive -->
                     </div>
                     <!-- end .table-rep-plugin-->
                  </div>
                  <!-- end .responsive-table-plugin-->
               </div>
               <!-- end card-box -->
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
      </div>
      <!-- end container-fluid -->
   </div>
   <!-- end content -->
   <!-- Footer Start -->

   <!-- end Footer -->
</div>
   @include('admin.users.account.show_detail')
@endsection()

