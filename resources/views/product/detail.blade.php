@extends('layout')
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
<div class="container">
   
        @method('put')
        @csrf

        <h2>Thông Tin Sản Phẩm</h2>
        <div class="container">
            <div class="col-md-5">
                <img class="img-circle elevation-2 avatar-size" id="preview" src="{{$products->image ? asset($products->image) : '/images/default-user-icon.png'}}">
            </div>
            <div class="col-md-7">
                <p style="font-size: 25px;    font-weight: 600;">{{$products->product_name}}</p>
                <p style="font-size: 17px;">Só lượng: <span style="font-weight: bold; font-size:20px;">{{$products->product_counts}} </span></p>
                <p style="font-size: 17px;">Loại sản phẩm: <span style="font-weight: bold; font-size:20px;">{{App\Product::CATEGORY[$products ->products_type]}}</span></p>
                
                <p style="font-size: 17px;">Giá: <span style="font-weight: bold; font-size:20px;">{{$products->product_out_prices}} VNĐ </span></p>
                <div class="gb-btnmuahang_myichi" style="float: left;">
                <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" style="" >
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                </button>
                </div>
            </div>
        </div>
<hr>
<h2>Mô tả sản phẩm</h2>
    <p>Đây là mô tả</p>

       
</div>
@endsection
@section('script')
@endsection
