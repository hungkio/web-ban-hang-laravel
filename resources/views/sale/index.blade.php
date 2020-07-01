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
<button><a href="{{route('sale.create')}}">+Add</a></button>
<table class="table display ui celled" id="list_guest">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Loạt mặt hàng</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Thời gian bắt đầu</th>
            <th scope="col">Thời gian kết thúc</th>
            <th scope="col">Rank</th>
            <th scope="col">Ngày tạo</th>
            <th scope="col">Ngày cập nhât</th>
           <!--  <th scope="col">Bậc Khuyễn Mãi</th>-->
            <th scope="col">Thao Tác Khác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->sale_product_type}}</td>
            <td>{{$row->sale_product_name}}</td>
            <td>{{$row->sale_begin}}</td>
            <td>{{$row->sale_end}}</td>
            <td>{{App\Sale::RANK[$row->sale_rank]}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td>
                <a class="btn btn-success" href="{{route('sale.edit', $row->id)}}">
                    Chỉnh Sửa
                </a>
                <a class="btn btn-danger" href="{{route('sale.delete', $row->id)}}" onclick="return confirm('Are you sure you want to delete this item')">
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
