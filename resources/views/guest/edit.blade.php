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
<h2>Sửa khách hàng</h2>
<div class="container">

    <form class="form-horizontal" role="form" id="validateForm" method="POST" action="{{route('guest.update', $guest->id)}}">
        @method('put')
        @csrf

        <h2>Sửa Thông Tin khách hàng</h2>

        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Tên Khách Hàng</label>
            <div class="col-sm-9">
                <input id="name" class="form-control error-border" name="name" type="text" autofocus value="{{$guest->name}}">
                @error('name')
                <span class=" col-6 error-val">{{ $message  }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Giới Tính</label>
                <div class="col-sm-9">
                    <select id="sex" class="form-control error-border" name="sex" type="text">
                        @foreach (App\Guest::GENDER as $gender)
                        <option value="{{App\Guest::GENDER_CODE[$gender]}}" @if(App\Guest::GENDER_CODE[$gender] == $guest->sex) selected @endif>{{$gender}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Tuổi</label>
                <div class="col-sm-9">
                    <input id="age" class="form-control error-border" name="age" type="text" value="{{$guest->age}}">
                    @error('age')
                    <span class=" col-6 error-val">{{ $message  }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Số Điện Thoại</label>
                <div class="col-sm-9">
                    <input id="phonenumber" class="form-control error-border" name="phonenumber" type="text" value="{{$guest->phonenumber}}">
                    @error('phonenumber')
                    <span class=" col-6 error">{{ $message  }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input id="email" class="form-control error-border" name="email" type="text" value="{{$guest->email}}" readonly>
                    @error('email')
                    <span class=" col-6 error-val">{{ $message  }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Địa Chỉ</label>
                <div class="col-sm-9">
                    <input id="address" class="form-control error-border" name="address" type="text" value="{{$guest->address}}">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Hạng Khuyến Mãi</label>
                <div class="col-sm-9">
                    <select id="sex" class="form-control error-border" name="sale_rank" type="text">
                        @foreach (App\Guest::RANK as $rank)
                        <option value="{{App\Guest::RANK_CODE[$rank]}}" @if(App\Guest::RANK_CODE[$rank] == $guest->sale_rank) selected @endif>{{$rank}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="save">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0px; "> <a href="{{route('guest.index')}}">Quay lại</a></button>
            
                </div>
           
        </form>
        
    </div>
    <div class="col-sm-2">
        
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


