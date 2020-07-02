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
<button><a href="{{route('user.create')}}">+Add</a></button>
<table class="table display ui celled" id="list_guest">
    <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Sex</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Thao Tác Khác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $row)
        <tr>
            <td>{{$row->username}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->age}}</td>
            <td>{{App\User::GENDER[$row->sex]}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phonenumber}}</td>
            <td>{{$row->address}}</td>
            <td>
                <a class="btn btn-success" href="{{route('user.edit', $row->id)}}">
                    Chỉnh Sửa
                </a>
                <a class="btn btn-danger" href="{{route('user.delete', $row->id)}}" onclick="return confirm('Are you sure you want to delete this item')">
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
