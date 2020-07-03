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
<form action="{{route('bill.store')}}">
    <table class="table display ui celled" id="list_guest">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Khuyễn Mãi</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Thao Tác Khác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $row)
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
    <button type="submit" class="btn" style="background: #0099FF; color: white; font-weight: bold; margin: 25px auto; ">Thanh Toán</button>
</form>
@endsection
@section('script')
<script src="/js/guest/index.js"></script>
@endsection
