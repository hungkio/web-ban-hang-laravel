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
    <div class="gb-chitiet_sanpham_myichi">
        <div class="container">
            <div class="col-md-3">
                <!--TIM KIẾM-->
                <div class="gb-timkiem-chungnhan_myichi">
                    <aside class="widget">
                        <div class="widget-content">
                            <img src="images/chung-nhan-1.png" alt="" class="img-responsive">
                        </div>
                    </aside>
                </div>
                <div class="gb-sidebar-sanphamnoibat_myichi">
                    <aside class="widget">
                        <h3 class="widget_sidebar-title_myichi">Sản phẩm nổi bật</h3>
                        <div class="widget-content">
                            <ul>

                                <li>
                                    <div class="gb-sidebar-sanphamnoibat_myichi-item">
                                        <div class="item-img">
                                            <a href="#">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="item-text">
                                            <h2><a href="#">Ten san pham</a></h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gb-sidebar-sanphamnoibat_myichi-item">
                                        <div class="item-img">
                                            <a href="#">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="item-text">
                                            <h2><a href="#">Ten san pham</a></h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gb-sidebar-sanphamnoibat_myichi-item">
                                        <div class="item-img">
                                            <a href="#">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="item-text">
                                            <h2><a href="#">Ten san pham</a></h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gb-sidebar-sanphamnoibat_myichi-item">
                                        <div class="item-img">
                                            <a href="#">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="item-text">
                                            <h2><a href="#">Ten san pham</a></h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gb-sidebar-sanphamnoibat_myichi-item">
                                        <div class="item-img">
                                            <a href="#">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="item-text">
                                            <h2><a href="#">Ten san pham</a></h2>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="gb-sidebar-fanpage_myichi">
                    <aside class="widget">
                        <h3 class="widget_sidebar-title_myichi"> Fanpage</h3>
                        <div class="widget-content">
                            Chen fanpage
                        </div>
                    </aside>
                </div>
                <div id="fb-root"></div>
            </div>
            <div class="col-md-9">
                <div class="gb-chitiet_sanpham_myichi-body">


                    <div class="gb-chitiet_sanpham_myichi-left">
                        <!--chi titest sản phẩm-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gb-chitiet_sanpham_myichi_left-img">
                                    <div class="uni-single-car-gallery-images">
                                        <div class="slider slider-for">

                                            <div class="slide-item">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive img1" data-zoom-image="images/aaaa.jpg">
                                            </div>

                                        </div>
                                        <div class="slider slider-nav">

                                            <div class="slide-item">
                                                <img src="images/aaaa.jpg" alt="" class="img-responsive img1" data-zoom-image="images/aaaa.jpg">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gb-chitiet_sanpham_myichi_left-info">
                                    <h1 class="product_title entry-title">Ten san pham</h1>
                                    <!-- .description -->
                                    <div class="description">
                                        Mo ta ngan
                                    </div>
                                    <!--ENTRY PRICE-->
                                    <div class="price-outer-container">
                                        <div class="prices_myichi">
                                            <p class="prices-news_myichi">Giá: <? $row1['product_price'] ?? '' ?> vnđ</p>
                                            <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                        </div>
                                    </div>
                                    <!--SỐ LƯỢNG VÀ ADD TO CART-->
                                    <div class="gb-chi-tiet-add-to-cart">
                                        <form class="cart" method="post" enctype="multipart/form-data">
                                            <div class="quantity">
                                                <div class="form-group">
                                                    <label>Số lượng:</label>
                                                    <input type="number" class="form-control qty number_cart" id="pwd" min="0" value="1">

                                                </div>
                                            </div>
                                            <button type="button" name="add-to-cart" class="single_add_to_cart_button button alt btn_addCart">Thêm vào giỏ hàng</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <!--THÔNG SỐ VÀ MÔ TẢ-->
                        <div class="gb-thongso-mota">
                            <div class="uni-shortcode-tabs-default">
                                <div class="uni-shortcode-tab-3">
                                    <div class="tabbable-panel">
                                        <div class="tabbable-line">
                                            <ul class="nav nav-tabs ">
                                                <li  class="active">
                                                    <a href="#tab_default_32" data-toggle="tab">
                                                    Mô tả sản phẩm</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_33" data-toggle="tab">
                                                    Chinh sach doi tra</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_34" data-toggle="tab">
                                                    chinh sach bao quan</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_default_32">
                                                    Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham Mo ta san pham
                                                </div>
                                                <div class="tab-pane" id="tab_default_33">
                                                    <p>Giao hàng miễn phí với đơn hàng trên 500k. Giao hàng miễn phí với đơn hàng trên 500k.Giao hàng miễn phí với đơn hàng trên 500k.Giao hàng miễn phí với đơn hàng trên 500k.Giao hàng miễn phí với đơn hàng trên 500k.</p>
                                                </div>
                                                <div class="tab-pane" id="tab_default_34">
                                                    Cach bao quan   Cach bao quan   Cach bao quan  Cach bao quan  Cach bao quan  Cach bao quan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gb-home-product gb-home-product-relate">
                            <div class="container">
                                <div class="titleCategoryProduct_myichi">Sản phẩm liên quan</div>
                                <div class="gb-home-product-relate-slide owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2>
                                                    Ten san pham
                                                </h2>
                                            </div>
                                            <div class="product_item_price_chitiet_myichi">
                                                <!--PRICES-->
                                                <div class="prices_myichi">
                                                    <p class="prices-news_myichi">Giá: 1.000.000 vnđ</p>
                                                    <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                                </div>
                                                <div class="gb-btnmuahang_myichi">
                                                    <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" >
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2>
                                                    Ten san pham
                                                </h2>
                                            </div>
                                            <div class="product_item_price_chitiet_myichi">
                                                <!--PRICES-->
                                                <div class="prices_myichi">
                                                    <p class="prices-news_myichi">Giá: 1.000.000 vnđ</p>
                                                    <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                                </div>
                                                <div class="gb-btnmuahang_myichi">
                                                    <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" >
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2>
                                                    Ten san pham
                                                </h2>
                                            </div>
                                            <div class="product_item_price_chitiet_myichi">
                                                <!--PRICES-->
                                                <div class="prices_myichi">
                                                    <p class="prices-news_myichi">Giá: 1.000.000 vnđ</p>
                                                    <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                                </div>
                                                <div class="gb-btnmuahang_myichi">
                                                    <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" >
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2>
                                                    Ten san pham
                                                </h2>
                                            </div>
                                            <div class="product_item_price_chitiet_myichi">
                                                <!--PRICES-->
                                                <div class="prices_myichi">
                                                    <p class="prices-news_myichi">Giá: 1.000.000 vnđ</p>
                                                    <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                                </div>
                                                <div class="gb-btnmuahang_myichi">
                                                    <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" >
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <script>
                            $(document).ready(function (){
                                var owl = $('.gb-home-product-relate-slide');
                                owl.owlCarousel({
                                    loop:true,
                                    margin:30,
                                    navSpeed:500,
                                    nav:true,
                                    dots:false,
                                    autoplay: true,
                                    rewind: true,
                                    navText:[],
                                    items:4,
                                    responsive:{
                                        0:{
                                            items:1,
                                            nav:true
                                        },
                                        600:{
                                            items:3,
                                            nav:false
                                        },
                                        1000:{
                                            items:4,
                                            nav:true,
                                            loop:false
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>


                </div>
            </div>
        </div>
    </div>



</div>



@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            slide: 'div'
        });
    });
</script>
@endsection
