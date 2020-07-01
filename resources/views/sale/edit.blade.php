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
        <h2>Sửa chương trình khuyến mãi</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Loại sản Phẩm</label>
            <div class="col-sm-9">
                <input id="sale_product_type" class="form-control error-border" name="sale_product_type" type="text" autofocus value="{{$sale->sale_product_type}}">
                @error('sale_product_type')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Tên Sản Phẩm</label>
            <div class="col-sm-9">
                <input id="sale_product_name" class="form-control error-border" name="sale_product_name" type="text" value="{{$sale->sale_product_name}}">
                @error('sale_product_name')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Thời gian bắt đầu</label>
            <div class="col-sm-9">
                <input id="sale_begin" class="form-control error-border" name="sale_begin" type="datetime-local" value="{{date('Y-m-d\TH:i', strtotime($sale->created_date))}}" style="width: 30%;">
                @error('sale_begin')
                <span class=" col-6 error">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Thời gian kết thúc</label>
            <div class="col-sm-9">
                <input id="sale_end" class="form-control error-border" name="sale_end" type="datetime-local" value="{{date('Y-m-d\TH:i', strtotime($sale->updated_date))}}" style="width: 30%;">
                @error('sale_end')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        
         <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Rank</label>
            <div class="col-sm-9" style="width: 24%;">
                <select id="sale_rank" class="form-control error-border" name="sale_rank" type="text">
                    @foreach (App\Sale::RANK as $item)
                    <option value="{{App\Sale::RANK_CODE[$item]}}" @if(App\Sale::RANK_CODE[$item] == $sale->sale_rank) selected @endif>{{$item}}</option>
                    @endforeach
                </select>
            </div>
        </div>
      
        <button type="submit" class="btn btn-primary btn-block">Save</button>
        <a href="{{route('sale.index')}}">Back</a>
    </form>
</div>
@endsection
@section('script')
@endsection
