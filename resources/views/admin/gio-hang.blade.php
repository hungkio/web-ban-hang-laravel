@extends('layout')
@section('content')
<div class="gb-content">
    <!--SLIDE-->
    <div class="slideslide" >
        <div class="gb-slideshow_myichi gb-slide-mobile">
            <div class="gb-slideshow_myichi-slide owl-carousel owl-theme">
                <div class="item">
                    <img src="images/be7047161447ce53c1e553c987402ab7.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- end slide -->
    <!--CONTENT-->
    <div class="uni-cart">
        <div id="wrapper-container" class="site-wrapper-container">
            <div id="main-content" class="site-main-content">
                <div class="site-content-area">
                    <main id="main" class="site-main">
                        <div class="uni-cart-body">
                            <div id="post" class="container">
                                <div style="margin-top: 40px;" class="entry-content">
                                    <div class="woocommerce">
                                        <div class="table-responsive" id="order_table" style="width: 100%;">
                                            <table class="table table-bordered" style="margin-bottom: 100px;">
                                                <tr>
                                                    <th width="40%">Tên sản phẩm</th>
                                                    <th width="10%">Số lượng</th>
                                                    <th width="20%">Giá</th>
                                                    <th width="15%">Tổng tiền</th>
                                                    <th width="5%">Hành động</th>
                                                </tr>
                                                <tr>
                                                    <td>Tên sản phẩm</td>
                                                    <td><input type="text" name="quantity[]" id="quantity" value="" data-product_id="" class="form-control quantity" />Số lượng</td>
                                                    <td align="right">Giá</td>
                                                    <td align="right">Tổng tiền</td>
                                                    <td><button name="delete" class="btn btn-danger btn-xs delete" id="" style="margin: 0px;">Xóa</button></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="right">Tổng tiền</td>
                                                    <td align="right">1000000 VNĐ</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" align="center">
                                                        <form method="post" action="/thanh-toan">
                                                            <input type="submit" name="place_order" class="btn btn-warning" value="Thanh toán" style="width: 20%;" />
                                                        </form>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script>
    $(document).ready(function (){
        var owl = $('.gb-slideshow_myichi-slide');
        owl.owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            items:1,
            responsive:{
                0:{
                    nav:false
                },
                600:{
                    nav:true
                }
            }
        });
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
@endsection
