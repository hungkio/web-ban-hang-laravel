<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css'>
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


    <div class="uni-checkout-body">

        <div class="container">
            <div class="tg-container">
                <div id="primary">
                    <div class="entry-thumbnail">
                        <div class="entry-content-text-wrapper clearfix">
                            <div class="entry-content-wrapper">
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="row">
                                            <form action="" method="POST" role="form" id="formPayment">
                                                <div class="vk-checkout-billing-left">
                                                    <div class="col-md-6">
                                                        <div class="woocommerce-billing-fields">
                                                            <h3>
                                                                Thông tin thanh toán và nhận hàng
                                                            </h3>
                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p class="form-row form-row-last" >
                                                                            <label class="">Họ và tên <abbr class="required" title="required">*</abbr></label>

                                                                            <input type="text" class="input-text " name="txtName" id="inputTxtName"  placeholder="Họ và tên" value="Họ và tên" required="" >
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p class="form-row form-row-last">
                                                                            <label class="">Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                                                            <input type="tel" class="input-text" name="txtPhone" id="inputTxtPhone" placeholder="Số điện thoại" value="Số điện thoại">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p class="form-row form-row-last">
                                                                            <label class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                            <input type="email" class="input-text" name="txtEmail" id="inputTxtEmail" placeholder="Địa chỉ Email" value="Email">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <p class="form-row form-row-last">
                                                                    <label class="">Địa chỉ <abbr class="required" title="required">*</abbr></label>
                                                                    <input type="text" class="input-text" name="txtAddress" id="inputTxtAddress" placeholder="Địa chỉ" value="Thông tin địa chỉ">
                                                                </p>
                                                                <p class="form-row form-row-last">
                                                                    <label class="">Ghi chú </label>
                                                                    <textarea class="input-text" name="txtNote" id="inputTxtNote" placeholder="" ></textarea>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="vk-checkout-order-paypal">
                                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                                <div class="vk-checkout-order-left">
                                                                    <h3>Thông tin giỏ hàng</h3>
                                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="product-name">Sản phẩm</th>
                                                                                <th class="product-total">Đơn giá</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr class="cart_item">
                                                                                <td class="product-name">
                                                                                    Tên sản phẩm
                                                                                </td>
                                                                                <td class="product-total">
                                                                                    <span class="woocommerce-Price-amount amount">Đơn Giá</span>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr class="order-total">
                                                                                <th style="font-weight: bold;">Tổng tiền</th>
                                                                                <th style="font-weight: bold;"><span class="woocommerce-Price-amount amount">6000000 VNĐ</th>
                                                                                </tr>
                                                                            </tfoot>

                                                                        </table>
                                                                    </div>
                                                                    <div class="form-row place-order">
                                                                        <button type="submit" name="send_mail" class="btn btn-primary" id="submitPayment" style="padding:3px 30px; font-weight:bold; font-size:16px; margin-bottom:15px;background-color:#247809; border:1px solid #fff;margin-top: 15px;" >Hoàn tất mua hàng</button>

                                                                        <input type="hidden" id="wpnonce" name="_wpnonce" value="341d89a24a"><input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/?wc-ajax=update_order_review">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div> <!-- Primary end -->
            </div>
        </div>
    </div>




</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        //------------------------checkout-----------------------------
        $('.woocommerce-info').on('click', function (e) {
            if($(e.target).is('.click-here-to-login')){
                $('.vk-form-woo-login').slideToggle();
                return false;
            }
            if($(e.target).is('.click-here-entry-code')){
                $('.vk-check-coupon').slideToggle();
                return false;
            }
        });
        $('.vk-checkout-billing-left').on('click', function (e) {
            if($(e.target).is('.checkbox-create-account')){
                $('.checkbox-create-account-form').slideToggle();
            }
        });
    });
</script>

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
