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
    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('sale.update', $sale->id)}}">
        @method('put')
        @csrf
        <h2>Sửa thông tin khuyến mãi</h2>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Loại sản phẩm</label>
            <div class="col-sm-9">
                <select id="sale_product_type" class="form-control error-border" name="sale_product_type" type="text">
                    @foreach (App\Product::CATEGORY as $product)
                    <option value="{{App\Product::CATEGORY_CODE[$product]}}" @if(App\Product::CATEGORY_CODE[$product] == $sale->sale_product_type) selected @endif>{{$product}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Phẩn trăm</label>
            <div class="col-sm-9">
                <input id="sale_percent" class="form-control error-border" name="sale_percent" type="number" value="{{$sale->sale_percent}}">
                @error('sale_percent')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Thời gian bắt đầu</label>
            <div class="col-sm-9">
                <input id="sale_begin" class="form-control error-border" name="sale_begin" type="date" value="{{$sale->sale_begin}}" style="width: 30%;">
                @error('sale_begin')
                <span class=" col-6 error">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Thời gian kết thúc</label>
            <div class="col-sm-9">
                <input id="sale_end" class="form-control error-border" name="sale_end" type="date" value="{{$sale->sale_end}}" style="width: 30%;">
                @error('sale_end')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>


        <button type="submit" class="btn btn-primary btn-block" style="margin-left:35%;" >Lưu</button>
        <button type="submit" class="btn btn-primary btn-block" style="margin-bottom:0px;">   <a href="{{route('sale.index')}}">Quay lại</a></button>



    </div>
    @endsection
    @section('script')
    @endsection
    <style>

        input#sale_percent {
            margin-top: 10px;
        }
    </style>
