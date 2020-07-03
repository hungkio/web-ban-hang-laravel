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
<form action="{{route('bill.store')}}" method="post" id="list_product">
    <select name="guest_id" id="">
        @foreach($guests as $row)
        <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
    @csrf
    <table class="table display ui celled" id="list_guest">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Khuyễn Mãi</th>
                <th scope="col">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <script>
                var ids =[]
            </script>
            @foreach($products as $key => $row)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$row->product_name}}</td>
                <td>
                    <button type="button" class="minus">-</button>
                    <p id="count{{$row->id}}">1</p>
                    <input type="hidden" name="count[{{$row->id}}][]" value="1" id="count">
                    <button type="button" class="plus">+</button>
                </td>
                <td id="price{{$row->id}}" class="price">{{$row->product_out_prices}}</td>
                <td>0</td>
                <td>
                    <p id="total{{$row->id}}" class="total"></p>
                    <script>
                        ids.push({{$row->id}})
                        $('#total{{$row->id}}').text($('#price{{$row->id}}').text() * $('#count{{$row->id}}').text())
                    </script>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>Tổng: <p id="total"></p> <input type="hidden" name="total_bill" value=""></div>
    <button type="button" id="thanhtoan">Thanh Toán</button>
</form>
@endsection
@section('script')
<script>
    $(function () {
        let total = 0
        ids.forEach(function(item, index) {
            total += parseInt($('#total' + item).text())
        });
        $("input[name=total_bill]").val(total)
        $('#total').text(total)
        $('.minus').click(function () {
            let count_curent = $(this).parent().find("input[id=count]").val()
            if (count_curent > 0) {
                count_curent--;
                $(this).parent().find("input[id=count]").val(count_curent)
                $(this).siblings("p").text(count_curent)
                $(this).parent().parent().find("p.total").text($(this).parent().parent().find(".price").text() * count_curent)
                let total = 0
                ids.forEach(function(item, index) {
                    total += parseInt($('#total' + item).text())
                });
                $('#total').text(total)
                if (total == 0) {
                    $('#thanhtoan').prop('disabled' , true);
                }
                $("input[name=total_bill]").val(total)
            }
        });
        $('.plus').click(function () {
            let count_curent = $(this).parent().find("input[id=count]").val();
            count_curent++;
            $(this).parent().find("input[id=count]").val(count_curent)
            $(this).siblings("p").text(count_curent)
            $(this).parent().parent().find("p.total").text($(this).parent().parent().find(".price").text() * count_curent)
            let total = 0
            ids.forEach(function(item, index) {
                total += parseInt($('#total' + item).text())
            });
            $('#total').text(total)
            if (total > 0) {
                $('#thanhtoan').prop('disabled' , false);
            }
            $("input[name=total_bill]").val(total)

        });

        $('#thanhtoan').click(function () {
            $.ajax({
                url: '{{route('bill.store')}}',
                method: 'post',
                data: $('#list_product').serialize(),
                beforeSend: function () {
                    $('#thanhtoan').prop('disabled', 1);
                },
                success: function (response) {
                    alert(response.success);
                },
                error: function (err) {
                    alert(err.error);
                },
                complete: function(){
                    $('#thanhtoan').prop("disabled", 0);
                }
            })
        })

    });
</script>
@endsection
