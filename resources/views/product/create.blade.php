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
<h2 class="themkhachhang">Thêm Sản Phẩm</h2>
    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Tên sản phẩm</label>
            <div class="col-sm-9">
                <input id="product_name" class="form-control error-border" name="product_name" type="text" autofocus value="">
                @error('product_name')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Số lượng</label>
            <div class="col-sm-9">
                <input id="product_counts" class="form-control error-border" name="product_counts" type="number" autofocus value="">
                @error('product_counts')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Loại sản phẩm</label>
            <div class="col-sm-9">
                <select id="products_type" class="form-control error-border" name="products_type" type="text">
                    @foreach (App\Product::CATEGORY as $product)
                    <option value="{{App\Product::CATEGORY_CODE[$product]}}">{{$product}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Mô tả</label>
            <div class="col-sm-9">
               <textarea class="form-control" id="product_des" name="product_des"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Giá nhập</label>
            <div class="col-sm-9">
                <input id="product_in_prices" class="form-control error-border" name="product_in_prices" type="number" value="">
                @error('product_in_prices')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Giá bán</label>
            <div class="col-sm-9">
                <input id="product_out_prices" class="form-control error-border" name="product_out_prices" type="number" value="">
                @error('product_out_prices')
                <span class=" col-6 error">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Image</label>
            <div class="col-sm-9">
                <input id="image" class="form-control error-border" name="image_file" type="file" value="">
            </div>
        </div>
        <div class="save">
        <button type="submit" class="btn btn-primary btn-block">Save</button>
        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0px; "> <a href="{{route('product.index')}}">Quay lại</a></button>
        </div>
    </form>
</div>
@endsection
@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'product_des' );
</script>
@endsection
<style>
    .form-control {
    display: block;
    width: 50%;}
    form#validateForm {
    width: 64%;
    margin-left: 14%;
    /* text-align: center; */
}
.themkhachhang {
    text-align: center;
    font-weight: 700;
    margin-bottom: 50px;
    margin-top: 50px;
    font-size: 35px;
    color: red;
}
.btn-block {
    width: 20% !important;
    float: left;
    margin-right: 45px;
}
.save{

    margin-left: 40%;
    margin-bottom: 100px;
color:black;
}
.save a{
    color: white;
}
</style>
