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
<button class="add1"><a href="{{route('product.create')}}">Thêm</a></button>
<table class="table display ui celled" id="list_guest">
    <thead>
        <tr class="bang1">
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Giá nhập</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Thao Tác Khác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->product_name}}</td>
            <td>{{$row->product_counts}}</td>
            <td>{{\App\Product::CATEGORY[$row->products_type]}}</td>
            <td>{{$row->product_in_prices}}</td>
            <td>{{$row->product_out_prices}}</td>
            <td>
                <img class="img-circle elevation-2 avatar-size" id="preview" src="{{$row->image ? asset($row->image) : '/images/default-user-icon.png'}}">
            </td>
            <td class="chinhsua">
                <a class="btn btn-success" href="{{route('product.edit', $row->id)}}">
                    Chỉnh Sửa
                </a>
                <a class="btn btn-danger" href="{{route('product.delete', $row->id)}}" onclick="return confirm('Are you sure you want to delete this item')">
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
}
.add1 a{
    font-size: 20px;
    font-weight: 600;
    color:black;
}
</style>
