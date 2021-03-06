<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Gymmaneger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('admin')}}\images\logogym.gif">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- App css -->
    <link href="{{asset('admin/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/images/logogym.gif')}}">
    <!-- App css -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
     {{--     datatable--}}
    {{--     enđatable--}}
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/> --}}
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
@include('sweetalert::alert')
<!-- Begin page -->
<div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        @if(\Illuminate\Support\Facades\Auth::user()->avatar)
                        <img src="{{asset("user/".\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="user-image"
                            class="rounded-circle">
                        @else
                        <img src="{{url('admin')}}/images/users/avatar-5.jpg" alt="user-image" class="rounded-circle">
                        @endif
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow text-white m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{route('user.profile',\Illuminate\Support\Facades\Auth::user()->id)}}"
                            class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>



                </div>
            </li>



        </ul>


            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{url('admin')}}/images/logogym.gif" alt="" width="200px">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{url('admin')}}/images/logogym.gif" alt="" height="24">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{url('admin')}}/images/logo-light.png" alt="" height="22">
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{url('admin')}}/images/logo-sm-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            @if($user->hasAnyRole('Super Admin'))
            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Gymmanager</li>

                        <li>
                            <a href="{{route('dashboard')}}">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-account-box-multiple"></i>
                                <span>Tài khoản</span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('user.index')}}">Admin</a></li>
                                <li><a href="{{route('role')}}">Phân quyền</a></li>
                                <li><a href="{{route('customer_account')}}">Khách hàng</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-nature-people"></i>
                                <span>Nhân viên</span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('listnhanvien')}}">Danh sách nhân viên</a></li>
                                <li><a href="{{route('listposition')}}">Chức vụ</a></li>
                                <li><a href="{{route('calamviec')}}">Ca làm việc</a></li>
                                <li><a href="{{route('calamviecnhanvien')}}">Ca làm việc nhân viên</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-account-multiple"></i>
                                <span> Khách hàng </span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('customer')}}">Danh sách khách hàng</a></li>
                                <li><a href="{{ route('customer.add') }}">Đăng kí</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-teach"></i>
                                <span>Chương trình PT</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('ptProgram.add')}}">Đăng ký </a></li>
                                <li><a href="{{route('ptProgram.index')}}">Chương trình PT</a></li>
                                <li><a href="{{route('ptProgram.training')}}">Lịch dạy</a></li>
                                <li><a href="{{route('ptProgram.profilePt')}}">Thông tin PT</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-package"></i>
                                <span>Dịch vụ</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('service')}}"> Xem dịch vụ</a></li>
                                <li><a href="{{route('hymnal.index')}}">Ca tập</a></li>
                                <li><a href="{{ route('package.index') }}">Gói cước</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-reflect-vertical"></i>
                                <span> Doanh thu </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="{{route('listRevenue')}}">Doanh thu</a></li>



                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-access-point"></i>
                                <span> Quản lý sản phẩm </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('listproduct')}}">Danh sách sản phẩm</a></li>
                                <li><a href="{{route('product.add')}}">Thêm sản phẩm</a></li>
                                <li><a href="{{route('listcategory')}}">Danh sách loại sản phẩm</a></li>
                                <li><a href="{{route('category.add')}}">Thêm loại sản phẩm</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-reflect-vertical"></i>
                                <span>Liên hệ</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('contact.admin')}}">Xem thông tin liên hệ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-seal-variant"></i>
                                <span>Quản lý bài viết</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('listposts')}}">Bài viết</a></li>
                                <li><a href="{{route('listcate_posts')}}">Danh mục bài viết</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('listForm') }}">
                                <i class="mdi mdi-bread-slice"></i>
                                <span>Thông tin Đăng kí</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            @elseif($user->hasAnyRole('Admin'))
                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Gymmanager</li>

                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-account-multiple"></i>
                                    <span> Khách hàng </span>
                                    {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('customer')}}">Danh sách khách hàng</a></li>
                                    <li><a href="{{ route('customer.add') }}">Đăng kí</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-teach"></i>
                                    <span>Chương trình PT</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('ptProgram.add')}}">Đăng ký </a></li>
                                    <li><a href="{{route('ptProgram.index')}}">Chương trình PT</a></li>
                                    <li><a href="{{route('ptProgram.training')}}">Lịch dạy</a></li>
                                    <li><a href="{{route('ptProgram.profilePt')}}">Thông tin PT</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-package"></i>
                                    <span>Dịch vụ</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('service')}}"> Xem dịch vụ</a></li>
                                    <li><a href="{{route('hymnal.index')}}">Ca tập</a></li>
                                    <li><a href="{{ route('package.index') }}">Gói cước</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-reflect-vertical"></i>
                                    <span> Doanh thu </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="{{route('listRevenue')}}">Doanh thu</a></li>



                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-access-point"></i>
                                    <span> Quản lý sản phẩm </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('listproduct')}}">Danh sách sản phẩm</a></li>
                                    <li><a href="{{route('product.add')}}">Thêm sản phẩm</a></li>
                                    <li><a href="{{route('listcategory')}}">Danh sách loại sản phẩm</a></li>
                                    <li><a href="{{route('category.add')}}">Thêm loại sản phẩm</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-reflect-vertical"></i>
                                    <span>Liên hệ</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('contact.admin')}}">Xem thông tin liên hệ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-seal-variant"></i>
                                    <span>Quản lý bài viết</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('listposts')}}">Bài viết</a></li>
                                    <li><a href="{{route('listcate_posts')}}">Danh mục bài viết</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('listForm') }}">
                                    <i class="mdi mdi-bread-slice"></i>
                                    <span>Thông tin Đăng kí</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            @elseif($user->hasAnyRole('PT'))
            <div class="slimscroll-menu">
                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Gymmanager</li>
                        <li>
                            <a href="{{route('dashboard')}}">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-book-open"></i>
                                <span> Học viên </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('pt.index')}}">Thông tin học viên</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-eye-check"></i>
                                <span> Lịch dạy </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('pt.teaching')}}">lịch dạy theo ngày</a></li>

                            </ul>

                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            @endif

            {{--content--}}

        </div>

        @yield('content')

    </div>
    {{--content--}}
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-18 m-0 text-white">Tuỳ chỉnh giao diện</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Tuỳ chỉnh </strong> bảng màu, bố cục,...
                </div>
                <div class="mb-2">
                    <img src="{{url('admin')}}/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Chế độ sáng</label>
                </div>

                <div class="mb-2">
                    <img src="{{url('admin')}}/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="{{url('admin')}}/css/bootstrap-dark.min.css"
                        data-appStyle="{{url('admin')}}/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Chế độ tối</label>
                </div>


        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- ajax js -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Vendor js -->
<script src="{{asset('admin/js/vendor.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('admin\libs\morris-js\morris.min.js')}}"></script>
{{-- <script src="{{asset('admin   \libs\raphael\raphael.min.js')}}"></script> --}}
<!-- Dashboard init js-->
{{-- <script src="{{asset('admin\js\pages\dashboard.init.js')}}"></script> --}}
<!-- App js -->
<script src="{{asset('admin\js\app.min.js')}}"></script>

<!--Form Wizard-->
<script src="{{asset('admin/libs/jquery-steps/jquery.steps.min.js')}}"></script>

<script src="{{asset('admin/libs/jquery-validation/jquery.validate.min.js')}}"></script>
<!-- Init js-->
<script src="{{asset('admin/js/pages/form-wizard.init.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('admin/libs/dropify/dropify.min.js')}}"></script>

<!-- Init js-->
<script src="{{asset('admin/js/pages/form-fileuploads.init.js')}}"></script>


<!-- App js -->
<script src="{{asset('admin/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('admin/libs/raphael/raphael.min.js')}}"></script>
<!-- Dashboard init js-->
{{-- <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script> --}}

<!-- App js -->
<script src="{{asset('admin/js/app.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('admin/js/user/user.js')}}"></script>
<script src="{{asset('admin/js/customer/showCustomer.js')}}"></script>
<script src="{{asset('admin/js/service/addService.js')}}"></script>
<script src="{{asset('admin/js/main/setup.js')}}"></script>
<script src="{{asset('admin/js/ptprogram/addptProgram.js')}}"></script>
{{-- <script scr="{{asset('admin/js/package/package.js')}}"></script> --}}
<script src="{{ asset('admin/js/ajax/ajax.js') }}"></script>
<script src="{{ asset('admin/js/user/SearchAccount.js') }}"></script>
<script src="{{ asset('admin/js/hymnal/search.js') }}"></script>
<script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
{{-- datatable--}}
<!-- Bootstrap JavaScript -->
<!-- App scripts -->
<script> CKEDITOR.replace('editor1'); </script>
<script> CKEDITOR.replace('editor2'); </script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('body').on('change', '#date_start', function(event){
        event.preventDefault();
        var val = $(this).val();
        var chuki = $('#chuki').val();
        var numberCk = 0;
        switch(chuki){
            case 'week':
                numberCk = 7;
                break;
            case 'month':
                numberCk = 30;
                break;
            default:
                numberCk = 365;
        }
        var n=  getdate(val,numberCk);
        // datend =  val + chuki

        console.log(n);
    })
})
function getdate(tt,total) {
    var date = new Date(tt);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + total);

    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    var someFormattedDate = y+'-'+mm+'-'+dd;

    document.getElementById("date_end").valueAsDate = new Date(someFormattedDate);
    return someFormattedDate;
}
$(document).ready(function() {
    $('#calamviec').select2();
});


$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>

</html>