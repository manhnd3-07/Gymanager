@extends('admin.layout.main')
@section('title', 'Chương trình PT')
@section('content')
    <div class="container">
        <table class="table table-data" style="background: #fff;margin-top:0px;margin-left: 120px ">
            <thead>
            <div id="datatable_filter" class="dataTables_filter" style="margin-top:150px;margin-left: 120px"><label><input id="myInput" type="text" placeholder="Tìm kiếm ..." class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Ngày tập</th>
                <th scope="col">Ca tập</th>
                <th scope="col">Học viên</th>
                <th scope="col">Huấn luyện viên</th>
                <th scope="col">Thơi gian tập</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachingSchedule as $key => $teachingSchedule)
                <tr>
                    <th scope="row">{{$key +1 }}</th>
                    <td>{{$teachingSchedule->date}}</td>
                    <td>{{$teachingSchedule->hymnal->name}}</td>
                    <td>{{$teachingSchedule->customer->name}}</td>
                    <td>{{$teachingSchedule->pt->name}}</td>
                    <td>{{$teachingSchedule->hymnal->start_hour}} - {{$teachingSchedule->hymnal->end_hour}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection