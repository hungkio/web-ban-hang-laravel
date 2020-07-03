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
<div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('product.update', $products->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <h2 class="suasanpham">Sửa Thông Tin Sản Phẩm</h2>


                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input id="product_name" class="form-control error-border" name="product_name" type="text" autofocus value="{{$products->product_name}}">
                            @error('product_name')
                            <span class=" col-6 error-val">{{ $message  }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input id="product_counts" class="form-control error-border" name="product_counts" type="number" autofocus value="{{$products->product_counts}}">
                            @error('product_counts')
                            <span class=" col-6 error-val">{{ $message  }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-2 control-label">Loại sản phẩm</label>
                        <div class="col-sm-10">
                            <select id="products_type" class="form-control error-border" name="products_type" type="text">
                                @foreach (App\Product::CATEGORY as $product)
                                <option value="{{App\Product::CATEGORY_CODE[$product]}}" @if(App\Product::CATEGORY_CODE[$product] == $products->products_type) selected @endif>{{$product}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Giá nhập</label>
                        <div class="col-sm-10">
                            <input id="product_in_prices" class="form-control error-border" name="product_in_prices" type="number" value="{{$products->product_in_prices}}">
                            @error('product_in_prices')
                            <span class=" col-6 error-val">{{ $message  }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Giá bán</label>
                        <div class="col-sm-10">
                            <input id="product_out_prices" class="form-control error-border" name="product_out_prices" type="number" value="{{$products->product_out_prices}}">
                            @error('product_out_prices')
                            <span class=" col-6 error">{{ $message  }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input id="image" class="form-control error-border" name="image_file" type="file" value="">
                            <img class="img-circle elevation-2 avatar-size" id="preview" src="{{$products->image ? asset($products->image) : '/images/default-user-icon.png'}}">
                        </div>
                    </div>



                <div class="save">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0px; ">  <a href="{{route('product.index')}}">Quay lại</a></button>

                </div>

            </form>
        </div>
    <div class="col-sm-2" style="display:none;">

        </div>
</div>
@endsection
@section('script')
@endsection
<style>
img#preview {
    width: 157px;
    margin-left: 33%;
}
h2.suasanpham {
    font-size: 30px;
    font-weight: co;
    font-weight: 600;
    color: red;
    text-align: center;
    margin-bottom: 50px;
    margin-top: 50px;
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
