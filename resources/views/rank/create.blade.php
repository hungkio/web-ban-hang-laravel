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
    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('rank.store')}}">
        @csrf
        <h2>Thêm Rank</h2>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Rank</label>
            <div class="col-sm-9" style="width: 24%;">
                <select id="rank_name" class="form-control error-border" name="rank_name" type="text">
                    @foreach (App\Rank::RANK as $item)
                        <option value="{{App\Rank::RANK_CODE[$item]}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Số lượng hóa đơn</label>
            <div class="col-sm-9">
                <input id="bill_count" class="form-control error-border" name="bill_count" type="number">
                @error('bill_count')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Phẩn trăm</label>
            <div class="col-sm-9">
                <input id="sale_percent" class="form-control error-border" name="sale_percent" type="number">
                @error('sale_percent')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Tổng hóa đơn</label>
            <div class="col-sm-9">
                <input id="total_bills" class="form-control error-border" name="total_bills" type="number" >
                @error('total_bills')
                <span class=" col-6 error">{{ $message  }}</span>
                @enderror
            </div>
        </div>


        <button type="submit" class="btn btn-primary btn-block" style="margin-left:35%;">Lưu</button>
        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0px; "> <a href="{{route('rank.index')}}">Quay lại</a></button>

    </form>
</div>
@endsection
@section('script')
@endsection
