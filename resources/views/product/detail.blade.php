@extends('layout')
@section('cart')
<div class="gb-header_myichi-topbar">

    <div class="container">

        <div class="row">

            <div class="col-md-10">

                <div class="gb-header_myichi-topbar-left">

                    <ul style="text-align: right;">

                        <li><i class="fa fa-map-marker" aria-hidden="true"><img src="images/icon11.png" style="width: 57px;" alt=""></i>Giao hàng toàn quốc cung cấp sỉ/lẻ </li>

                        <li><i class="fa fa-phone" aria-hidden="true"> <img src="images/icon22.jpg" style="width: 57px;" alt=""></i> Hotline: 0931 45 35 75 - Hỗ trợ 24/7</li>
                        <li><i class="fa fa-paper-plane" aria-hidden="true"> <img src="images/icon3.png" style="width: 57px;" alt=""></i>  Đổi trả lên đến 15 ngày
                        </li>


                    </ul>

                </div>

            </div>


            <div class="col-md-2">
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> Giỏ hàng (<span id="count">0</span>)
                </button>

            </div>

        </div>

    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{route('bill.create')}}" method="post" id="form-cart">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Giỏ Hàng</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Thanh Toán</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
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

    @method('put')
    @csrf

    <h2>Thông Tin Sản Phẩm</h2>
    <div class="container">
        <div class="col-md-5">
            <img class="img-circle elevation-2 avatar-size" id="preview" src="{{$products->image ? asset($products->image) : '/images/default-user-icon.png'}}">
        </div>
        <div class="col-md-7">
            <div class="product_item_text_myichi">
                <h2><a href="/{{route('product.detail', $products->id)}}">{{$products->product_name}}</a></h2>
                <div class="product_item_price_chitiet_myichi">
                    <!--PRICES-->
                    <div class="prices_myichi">
                        <p class="prices-news_myichi">{{$products->product_out_prices}} vnđ</p>
                    </div>
                    <div class="gb-btnmuahang_myichi">
                        <input class="id-product" type="hidden" value="{{$products->id}}">
                        <button type="button" name="add-to-cart" id="add-to-cart-{{$products->id}}" class="btn btn-addtocart_naustore btn_addCart" >
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr>
<h2>Mô tả sản phẩm</h2>
    <div id="des" class="col-md-9">
        {!!$products->product_des!!}
    </div>


</div>
@endsection
@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'product_des' );
</script>
@endsection
