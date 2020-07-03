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
    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('rank.update', $sale->id)}}">
        @method('put')
        @csrf
        <h2>Sửa thông tin rank</h2>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Rank</label>
            <div class="col-sm-9" style="width: 24%;">
                <select id="rank_code" class="form-control error-border" name="rank_code" type="text">
                    @foreach (App\Sale::RANK as $item)
                        <option value="{{App\Rank::RANK_CODE[$item]}}" @if(App\Rank::RANK_CODE[$item] == $rank->rank_code) selected @endif>{{$item}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Số lượng hóa đơn</label>
            <div class="col-sm-9">
                <input id="bill_count" class="form-control error-border" name="bill_count" type="text" autofocus value="{{$rank->bill_count}}">
                @error('bill_count')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>

        </div>
        <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Phẩn trăm</label>
                <div class="col-sm-9">
                    <input id="sale_percent" class="form-control error-border" name="sale_percent" type="number" value="{{$rank->sale_percent}}">
                    @error('sale_percent')
                    <span class=" col-6 error-val">{{ $message  }}</span>
                    @enderror
                </div>

            </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Tổng hóa đơn</label>
            <div class="col-sm-9">
                <input id="total_bills" class="form-control error-border" name="total_bills" type="number" value="{{$rank->total_bills}}" >
                @error('total_bills')
                <span class=" col-6 error">{{ $message  }}</span>
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