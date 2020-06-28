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
    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('guest.store')}}">
        @csrf
        <h2>Thêm khách hàng</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Tên Khách Hàng</label>
            <div class="col-sm-9">
                <input id="name" class="form-control error-border" name="name" type="text" autofocus>
                @error('name')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Giới Tính</label>
            <div class="col-sm-9">
                <select id="sex" class="form-control error-border" name="sex" type="text">
                    @foreach (App\Guest::GENDER as $gender)
                    <option value="{{App\Guest::GENDER_CODE[$gender]}}">{{$gender}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Tuổi</label>
            <div class="col-sm-9">
                <input id="age" class="form-control error-border" name="age" type="text">
                @error('age')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Số Điện Thoại</label>
            <div class="col-sm-9">
                <input id="phonenumber" class="form-control error-border" name="phonenumber" type="text" value="">
                @error('phonenumber')
                <span class=" col-6 error">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input id="email" class="form-control error-border" name="email" type="text">
                @error('email')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Địa Chỉ</label>
            <div class="col-sm-9">
                <input id="address" class="form-control error-border" name="address" type="text" value="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Save</button>
        <a href="{{route('guest.index')}}">Back</a>
    </form>
</div>
@endsection
@section('script')
@endsection
