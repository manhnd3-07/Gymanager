@extends('admin.layout.main')
@section('title', 'Danh vụ')
@section('content')
    @include('sweetalert::alert')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Dịch vụ</h4>
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
                                        <div id="datatable_filter" class="dataTables_filter" ><label><input id="myInput" type="text" placeholder="Tìm kiếm ..." class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                                        <div class="btn-group dropdown-btn-group pull-right">
                                            <button type="button" class="btn btn-default"><a
                                                    href="{{route('service.add')}}" class="active">Thêm
                                                </a></button>
                                                <!-- <button type="button"
                                                class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hiện thêm
                                                thông tin <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-1"
                                                        id="toggle-tech-companies-1-col-1"
                                                        value="tech-companies-1-col-1"> <label
                                                        for="toggle-tech-companies-1-col-1">Email</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-2"
                                                        id="toggle-tech-companies-1-col-2"
                                                        value="tech-companies-1-col-2"> <label
                                                        for="toggle-tech-companies-1-col-2">Trạng thái</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-3"
                                                        id="toggle-tech-companies-1-col-3"
                                                        value="tech-companies-1-col-3"> <label
                                                        for="toggle-tech-companies-1-col-3">Ngày bắt đầu</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-4"
                                                        id="toggle-tech-companies-1-col-4"
                                                        value="tech-companies-1-col-4">
                                                    <label for="toggle-tech-companies-1-col-4">Ngày kết thúc</label>
                                                </li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-5"
                                                        id="toggle-tech-companies-1-col-5"
                                                        value="tech-companies-1-col-5"> <label
                                                        for="toggle-tech-companies-1-col-5">Avarta</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-6"
                                                        id="toggle-tech-companies-1-col-6"
                                                        value="tech-companies-1-col-6"> <label
                                                        for="toggle-tech-companies-1-col-6">Bid</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-7"
                                                        id="toggle-tech-companies-1-col-7"
                                                        value="tech-companies-1-col-7"> <label
                                                        for="toggle-tech-companies-1-col-7">Ask</label></li>
                                                <li class="checkbox-row"><input type="checkbox"
                                                        name="toggle-tech-companies-1-col-8"
                                                        id="toggle-tech-companies-1-col-8"
                                                        value="tech-companies-1-col-8"> <label
                                                        for="toggle-tech-companies-1-col-8">1y Target Est</label></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="table-responsive fixed-solution" data-pattern="priority-columns">

                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th id="tech-companies-1-col-0-clone">STT</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Tên dịch vụ</th>
                                                    <th data-priority="1" id="tech-companies-1-col-1-clone"
                                                        style="text-alight:center">Tên khách hàng</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Loại dịch vụ</th>
                                                    <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày bắt đầu
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày kết
                                                        thúc
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày kích
                                                        hoạt
                                                    </th>
                                                    
                                                    <th data-priority="3" id="tech-companies-1-col-4-clone">Tổng tiền
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-5-clone">Số tiền
                                                        khách trả</th>
                                                    <th data-priority="3" id="tech-companies-1-col-7-clone">Hình thức
                                                        thanh toán
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">
                                                @foreach($listService as $key => $service)
                                                <tr>
                                                    <th data-org-colspan="1" data-columns="tech-companies-1-col-0">
                                                        {{$key+1}}</th>
                                                        <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">
                                                        {{$service->name}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">
                                                        {{$service->customer->name}}
                                                    </td>
                                                    <!-- <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">{{$service->name}}
                                                    </td> -->
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">{{$service->status}}
                                                    </td>
                                                    <!-- <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2">{{$service->id_package}}
                                                    </td> -->
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-3">{{$service->start_date}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-3">{{$service->end_date}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-4">{{$service->active_date}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-5">
                                                        {{number_format($service->total_package,0,',','.')}}</td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-6">
                                                        {{number_format($service->customers_pay,0,',','.')}}</td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-3">
                                                        {{$service->pay_method}}</td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-8">
                                                        <div class="btn-group mt-1 mr-1">
                                                            <button class="btn btn-success btn-sm dropdown-toggle"
                                                                type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu" x-placement="bottom-start"
                                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('service.edit', ['id'=>$service->id]) }}"><i
                                                                        class="mdi mdi-lead-pencil"></i>Sửa</a>
                                                                <a class="dropdown-item btn-remove"
                                                                    href="{{route('service.delete',$service->id)}}"><i
                                                                        class="mdi mdi-delete"></i> Xoá</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {!! $listService->render() !!}
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
@endsection()