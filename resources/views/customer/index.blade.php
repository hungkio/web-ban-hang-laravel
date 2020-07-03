@extends('layout')
@section('content')
@include('slide')
<div class="gb-content">
    <!--CONTENT-->
    <div class="Content-Main_myichi">
        <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="gb-mathanguachuong_myichi">
                        <marquee style="font-size: 25px;    font-weight: bold;    line-height: 17px; background-color: #81F7D8;   color: red;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/FireIcon.svg/1200px-FireIcon.svg.png" alt="" style="width: 2%;">
                            Chương trình khuyến mãi: Giảm ngay
                            <span style="font-size: 20px; color: orange">{{$sales1 -> sale_percent}}%</span> khi mua từ ngày
                            <span style="font-size: 20px; color: orange">{{$sales1 -> sale_begin}}</span> đến ngày

                            <span style="font-size: 20px; color: orange">{{$sales1 -> sale_end}}</span>
                             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/FireIcon.svg/1200px-FireIcon.svg.png" alt="" style="width: 2%;">
                        </marquee>
<<<<<<< HEAD


=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                    </div>
                </div>
            </div>
            <!--SẢN PHẨM BÁN CHẠY-->
                <section id="demos">
                    <div class="gb-mathanguachuong_myichi">
<<<<<<< HEAD

=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm điện thoại</h4>
                            <div class="aaa234"></div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="phone owl-carousel owl-theme">
                                @foreach($phones as $phone)
                                    <div class="item">

                                            <div class="product_item_myichi">
                                                <div class="product_item_img_myichi">
                                                <a href="{{route('product.detail', $phone->id)}}">
<<<<<<< HEAD

                                                            <img src="{{asset($phone->image)}}" alt="" class="img-responsive">
                                                        </a>
                                                    <!--SALE-->
                                                
                                                </div>
                                                <div class="product_item_text_myichi">
                                                   
                                                    <div class="product_item_text_myichi">
                                                        <h2 class="sanpham"><a href="/{{route('product.detail', $phone->id)}}">{{$phone->product_name}}</a></h2>
                                                        <div class="product_item_price_chitiet_myichi">
                                                            <!--PRICES-->
                                                            <div class="prices_myichi">
                                                                <p class="prices-news_myichi">Giá:{{$phone->product_out_prices}} vnđ</p>
                                                                <p class="prices-old_myichi">Giá sỉ: Liên hệ</p>
                                                            </div>
                                                            <div class="gb-btnmuahang_myichi">
                                                                <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore btn_addCart" >
                                                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                                </button>
                                                            </div>
                                                        </div>

=======
                                                    <img src="{{asset($phone->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/{{route('product.detail', $phone->id)}}">{{$phone->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$phone->product_out_prices}} vnđ</p>
                                                    </div>
                                                    <div class="gb-btnmuahang_myichi">
                                                        <input class="id-product" type="hidden" value="{{$phone->id}}">
                                                        <button type="button" name="add-to-cart" id="add-to-cart-{{$phone->id}}" class="btn btn-addtocart_naustore btn_addCart" >
                                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua Ngay
                                                        </button>
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>

                                @endforeach



                                </div>
                                <script>
                                $(document).ready(function() {
                                    var owl = $('.phone');
                                    owl.owlCarousel({
                                    margin: 10,
                                    nav: false,
                                    dot: false,
                                    nav: false,
                                    loop: true,
                                    responsive: {
                                        0: {
                                        items: 1
                                        },
                                        600: {
                                        items: 3
                                        },
                                        1000: {
                                        items: 4
                                        }
                                    }
                                    })
                                })
                                </script>
                            </div>
                        </div>

                    </div>

                </section>
                <section id="demos">
                    <div class="gb-mathanguachuong_myichi">
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm laptop</h4> <div class="aaa234"></div>

                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">
                                @foreach($laptops as $laptop)
                                <div class="item">

                                    <div class="product_item_myichi">
                                        <div class="product_item_img_myichi">
                                            <a href="#">
                                                <img src="{{asset($laptop->image)}}" alt="" class="img-responsive">
                                            </a>
                                            <!--SALE-->

                                        </div>
                                        <div class="product_item_text_myichi">
                                                    <h2 class="sanpham"><a href="/#">{{$laptop->product_name}}</a></h2>
                                                    <div class="product_item_price_chitiet_myichi">
                                                        <!--PRICES-->
                                                        <div class="prices_myichi">
                                                            <p class="prices-news_myichi">Giá:{{$laptop->product_out_prices}} vnđ</p>
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



                                @endforeach



                                </div>
                                <script>
                                $(document).ready(function() {
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                    margin: 10,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                        items: 1
                                        },
                                        600: {
                                        items: 3
                                        },
                                        1000: {
                                        items: 4
                                        }
                                    }
                                    })
                                })
                                </script>
                            </div>
                        </div>

                    </div>

                </section>  <section id="demos">
                    <div class="gb-mathanguachuong_myichi">
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm máy tính bảng</h4>
                            <div class="aaa234"></div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">

                                @foreach($tablets as $tablet)
                                <div class="item">

                                    <div class="product_item_myichi">
                                        <div class="product_item_img_myichi">
                                        <a href="#">
                                                    <img src="{{asset($tablet->image)}}" alt="" class="img-responsive">
                                                </a>
                                            <!--SALE-->

                                        </div>
                                        <div class="product_item_text_myichi">
                                        <h2 class="sanpham"><a href="/#">{{$tablet->product_name}}</a></h2>
                                        <div class="product_item_price_chitiet_myichi">
                                            <!--PRICES-->
                                            <div class="prices_myichi">
                                                        <p class="prices-news_myichi">Giá:{{$tablet->product_out_prices}} vnđ</p>
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



                                @endforeach



                                </div>
                                <script>
                                $(document).ready(function() {
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                    margin: 10,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                        items: 1
                                        },
                                        600: {
                                        items: 3
                                        },
                                        1000: {
                                        items: 4
                                        }
                                    }
                                    })
                                })
                                </script>
                            </div>
                        </div>

                    </div>

                </section>

                <section id="demos">
                    <div class="gb-mathanguachuong_myichi">
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm đồng hồ thông minh</h4>
                            <div class="aaa234"></div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">

                            @foreach($watchs as $watch)
                                <div class="item">

                                    <div class="product_item_myichi">
                                        <div class="product_item_img_myichi">
                                        <a href="#">
                                            <img src="{{asset($watch->image)}}" alt="" class="img-responsive">
                                        </a>
                                            <!--SALE-->

                                        </div>
                                        <div class="product_item_text_myichi">
                                        <h2 class="sanpham"><a href="/#">{{$watch->product_name}}</a></h2>
                                        <div class="product_item_price_chitiet_myichi">
                                            <!--PRICES-->
                                            <div class="prices_myichi">
                                                <p class="prices-news_myichi">Giá:{{$watch->product_out_prices}} vnđ</p>
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



                                @endforeach



                                </div>
                                <script>
                                $(document).ready(function() {
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                    margin: 10,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                        items: 1
                                        },
                                        600: {
                                        items: 3
                                        },
                                        1000: {
                                        items: 4
                                        }
                                    }
                                    })
                                })
                                </script>
                            </div>
                        </div>

                    </div>

                </section>

                <section id="demos">
                    <div class="gb-mathanguachuong_myichi">
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm phụ kiện khác</h4>
                            <div class="aaa234"></div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme">

                                    @foreach($accessorys as $accessory)
                                        <div class="item">

                                            <div class="product_item_myichi">
                                                <div class="product_item_img_myichi">
                                                    <a href="#">
                                                        <img src="{{asset($accessory->image)}}" alt="" class="img-responsive">
                                                    </a>
                                                    <!--SALE-->

                                                </div>
                                                <div class="product_item_text_myichi">
                                                    <h2 class="sanpham"><a href="/#">{{$accessory->product_name}}</a></h2>
                                                    <div class="product_item_price_chitiet_myichi">
                                                        <!--PRICES-->
                                                        <div class="prices_myichi">
                                                                <p class="prices-news_myichi">Giá:{{$accessory->product_out_prices}} vnđ</p>
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





                                    @endforeach



                                </div>
                                <script>
                                $(document).ready(function() {
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                    margin: 10,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                        items: 1
                                        },
                                        600: {
                                        items: 3
                                        },
                                        1000: {
                                        items: 4
                                        }
                                    }
                                    })
                                })
                                </script>
                            </div>
                        </div>

                    </div>

                </section>

                <div class="gb-latest-post_myichi">
                    <div class="titleCategoryProduct_myichi">
                        <h4>Chương trình khuyến mãi</h4>
                        <div class="aaa234"></div>
                    </div>
                    <div class="gb-latest-post-body">
                        <!--LASTEST POST DESKTOP-->
                        <div class="gb-latest-post-body-desktop">
                            <div class="owl-three-item-dotted owl-carousel owl-theme">
<<<<<<< HEAD


=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                                <div class="item">
                                    <div class="blog-grid-item">
                                        <article class="post type-post">
                                            <div class="content-inner">
                                                <div class="gb-entry-top">
                                                    <div class="thumbnail-img">
                                                        <a href="#" title="">
                                                            <img src="images/aaaa.jpg" alt="" title="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
<<<<<<< HEAD

                        
=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                                                <div class="gb-divider"></div>
                                                <div class="gb-entry-content">
                                                    <header class="gb-entry-header">
                                                    <!--  <h2 class="gb-entry-title">
                                                            <a href="/#" rel="">Chương trình khuyến mãi</a>
                                                        </h2> -->
                                                    </header>
<<<<<<< HEAD


                                                    <div class="gb-divider"></div>

                                               

                                                    <div class="entry-excerpt nhapnhay">
                                                        @foreach($saleslimit as $item)
                                                    
                                                            <p>Chương trình khuyến mãi: Giảm ngay 
                                                            <span style="font-size: 25px; color: red">{{$item -> sale_percent}}%</span> khi mua 


                                                            <span  style="font-size: 25px; color: red">{{App\Product::CATEGORY[$item->sale_product_type]}}</span> cho khách hàng bậc trở lên
                                                            <span  style="font-size: 25px; color: red; text-transform: uppercase;">{{App\Sale::RANK[$item->sale_rank]}}</span> từ ngày
=======
                                                    <div class="gb-divider"></div>

                                                    <div class="entry-excerpt nhapnhay">
                                                        @foreach($saleslimit as $item)

                                                            <p>Chương trình khuyến mãi: Giảm ngay
                                                            <span style="font-size: 25px; color: red">{{$item -> sale_percent}}%</span> khi mua từ ngày
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
                                                            <span style="font-size: 25px; color: red">{{$item -> sale_begin}}</span> đến ngày

                                                            <span style="font-size: 25px; color: red">{{$item -> sale_end}}</span></p>

                                                        @endforeach
                                                    </div>
<<<<<<< HEAD
         
=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb


                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                <div>




        </div>
    </div>

</div>


@endsection
@section('script')
@endsection
<style>
    .nhapnhay p:first-child,  .nhapnhay p:first-child span{
        font-size: 27px;
        font-weight: bold;
        animation: my 700ms infinite;
    }
    @keyframes my {
     0% { color: #F8CD0A;  }
     50% { color: #d33;  }
<<<<<<< HEAD

     100% { color: #F8CD0A;  } 
     } 
=======
     100% { color: #F8CD0A;  }
     }
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
     .aaa234 {
    border: 2px solid red;
    width: 90px;
    text-align: center;
    margin-left: 46%;
}
</style>
<<<<<<< HEAD

    
=======
>>>>>>> 2057b47bb8c46231556a159a76b85ce8a0b68cdb
