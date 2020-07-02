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
<button class="add1"><a href="{{route('guest.create')}}">Thêm</a></button>
<table class="table display ui celled" id="list_guest">
    <thead>
        <tr class="bang1">
            <th scope="col"  class="guest1">ID</th>
            <th scope="col" class="guest2">Tên Khách Hàng</th>
            <th scope="col" class="guest3">Giới Tính</th>
            <th scope="col" class="guest4">Tuổi</th>
            <th scope="col" class="guest5">Số Điện Thoại</th>
            <th scope="col" class="guest6">Email</th>
            <th scope="col" class="guest7">Địa Chỉ</th>
            <th scope="col" class="guest8">Bậc Khuyễn Mãi</th>
            <th scope="col" class="guest9">Thao Tác Khác</th>
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
            <td class="chinhsua">
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

<style>

button.add1 {
    float: right;
    margin-top: 10px;
    border: 1px solid ;
    margin-right: 63px;
}
.wrapper {
    margin: 27px;
}
div#list_guest_length {
    margin-top: 20px;
    margin-bottom: 20px;
    margin-right: 100px;
    float: left;
}
div#list_guest_filter label{
    margin-top: 20px;
    margin-bottom: 20px;
}
table, th, td {
 border: 1px solid #ddd !important;
 }
 tr:nth-child(even) {
    background-color: #A9F5F2;
}
tr.bang1 {
    background-color: #58D3F7;
    height: 70px;
}
.btn-success {
    color: #fff;
    margin-right: 10px;
   
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.chinhsua{
    text-align: center;
}
button.add1 {
    height: 32px;
    width: 100px;
   
   
    margin-bottom: 30px;
    color: red;

}
.add1 a{
    font-size: 20px;
    font-weight: 600;
    color:red;
}
.add1 a:hover{

    color:white;
}
button.add1:hover{
    background-color: red;
    color:white

}

th.so3 {
    width: 7%;
}
th.guest9.sorting {
    width: 14% !important;
}
th.guest8.sorting {
    width: 12% !important;
}
th.guest3.sorting {
    width: 7% !important;

}
th.guest2.sorting {
    width: 12% !important;
}

</style>