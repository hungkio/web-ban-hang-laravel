@extends('layout')
@section('content')
<div class="gb-content">
    <!--CONTENT-->
    <div class="Content-Main_myichi">
        <div class="container">
            <!--SẢN PHẨM BÁN CHẠY-->
            <div class="row">
                <div class="col-md-12">
                    <div class="gb-mathanguachuong_myichi">
                        <div class="titleCategoryProduct_myichi">
                            <h4>Sản phẩm bán chạy</h4>
                        </div>

                        <div class="categoryProduct_myichi">
                            <div class="container">
                                <div class="row">
                                    <h3>Điện thoại</h3>
                                    @foreach($phones as $phone)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="{{asset($phone->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/#">{{$phone->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$phone->product_out_prices}} vnđ</p>
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
                            </div>
                        </div>

                        <div class="categoryProduct_myichi">
                            <div class="container">
                                <div class="row">
                                    <h3>Laptop</h3>
                                    @foreach($laptops as $laptop)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="{{asset($laptop->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/#">{{$laptop->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$laptop->product_out_prices}} vnđ</p>
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
                            </div>
                        </div>

                        <div class="categoryProduct_myichi">
                            <div class="container">
                                <div class="row">
                                    <h3>Máy tính bảng</h3>
                                    @foreach($tablets as $tablet)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="{{asset($tablet->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/#">{{$tablet->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$tablet->product_out_prices}} vnđ</p>
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
                            </div>
                        </div>

                        <div class="categoryProduct_myichi">
                            <div class="container">
                                <div class="row">
                                    <h3>Đồng hồ thông minh</h3>
                                    @foreach($watchs as $watch)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="{{asset($watch->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/#">{{$watch->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$watch->product_out_prices}} vnđ</p>
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
                            </div>
                        </div>

                        <div class="categoryProduct_myichi">
                            <div class="container">
                                <div class="row">
                                    <h3>Phụ kiện khác</h3>
                                    @foreach($accessorys as $accessory)
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="product_item_myichi">
                                            <div class="product_item_img_myichi">
                                                <a href="#">
                                                    <img src="{{asset($accessory->image)}}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_myichi">
                                                <h2><a href="/#">{{$accessory->product_name}}</a></h2>
                                                <div class="product_item_price_chitiet_myichi">
                                                    <!--PRICES-->
                                                    <div class="prices_myichi">
                                                        <p class="prices-news_myichi">{{$accessory->product_out_prices}} vnđ</p>
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="gb-latest-post_myichi">
                <div class="titleCategoryProduct_myichi">
                    <h4>Tin tức</h4>
                </div>
                <div class="gb-latest-post-body">
                    <!--LASTEST POST DESKTOP-->
                    <div class="gb-latest-post-body-desktop">
                        <div class="owl-three-item-dotted owl-carousel owl-theme">

                            <div class="item">
                                <div class="blog-grid-item">
                                    <article class="post type-post">
                                        <div class="content-inner">
                                            <div class="gb-entry-top">
                                                <div class="thumbnail-img">
                                                    <a href="#" title="">
                                                        <img src="images/aaa.jpg" alt="" title="" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gb-divider"></div>
                                            <div class="gb-entry-content">
                                                <header class="gb-entry-header">
                                                    <h2 class="gb-entry-title">
                                                        <a href="/#" rel="">Tên tin tức</a>
                                                    </h2>
                                                </header>

                                                <div class="gb-divider"></div>

                                                <div class="entry-excerpt">
                                                    <p>Mô tả ngắn tin tức</p>
                                                </div>


                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
@section('script')
@endsection
