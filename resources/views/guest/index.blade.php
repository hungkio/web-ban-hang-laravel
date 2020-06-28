@extends('layout')
@section('title','User Management')
@section('content')
@if ( Session::has('success') )
<div class="alert alert-success alert-dismissible" role="alert">
    <strong>{{ Session::get('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
@if ( Session::has('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>{{ Session::get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
</div>
<button><a href="{{route('guest.create')}}">+Add</a></button>
<table class="table display ui celled" id="list_guest">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Khách Hàng</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Bậc Khuyễn Mãi</th>
            <th scope="col">Thao Tác Khác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guests as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{App\Guest::GENDER[$row->sex]}}</td>
            <td>{{$row->age}}</td>
            <td>{{$row->phonenumber}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->address}}</td>
            <td>{{App\Guest::RANK[$row->sale_rank]}}</td>
            <td>
                <a class="btn btn-success" href="{{route('guest.edit', $row->id)}}">
                    Chỉnh Sửa
                </a>
                <a class="btn btn-danger" href="{{route('guest.delete', $row->id)}}" onclick="return confirm('Are you sure you want to delete this item')">
                    Xóa
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('script')
<script src="/js/guest/index.js"></script>
@endsection
