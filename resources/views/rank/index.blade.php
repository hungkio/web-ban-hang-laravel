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

<div class="container">
    <table class="table display ui celled" id="list_guest">
        <thead>
            <tr class="bang1">
                <th scope="col">ID</th>
                <th scope="col">Tên rank</th>
                <th scope="col">Số lượng hóa đơn</th>
                <th scope="col">Phần trăm khuyến mãi</th>
                <th scope="col">Tổng hóa đơn</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Ngày cập nhât</th>
                <th scope="col">Thao Tác Khác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ranks as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{App\Rank::RANK[$row->rank_code]}}</td>
                <td>{{$row->bill_count}}</td>
                <td>{{$row->sale_percent}}</td>
                <td>{{$row->total_bills}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('rank.edit', $row->id)}}">
                        Chỉnh Sửa
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

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
tr.bang1 th {
    background-color: #58D3F7;
    text-align: center;
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
    margin-bottom: 30px;
    color: red;

}
.add1 a{
    font-size: 20px;
    font-weight: 600;
    color:red;
}
.add1 a:hover{

    color:white;
}
button.add1:hover{
    background-color: red;
    color:white

}
button.add1 {
    height: 32px;
    width: 100px;
}
tbody {
    text-align: center;
}
</style>
