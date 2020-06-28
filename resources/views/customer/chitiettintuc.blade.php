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

    <div class="gb-chitiet-tintuc_myichi">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="gb-single-blog-right_myichi">
                        <div class="gb-single-blog-right_myichi-img">
                            <img src="images/aaaa.jpg" alt="" class="img-responsive" style="width:100%; height:300px;">
                        </div>
                        <div class="gb-single-blog-right_myichi-title">
                            <h2>Tiêu đề bài viết tin tức</h2>
                        </div>
                        <div class="gb-single-blog-right_myichi-info">
                            <ul>
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"> Admin</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#"> Ngày tạo bài viết</a></li>
                                <li><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#"> Design, Graphic</a></li>
                                <li><i class="fa fa-comment-o" aria-hidden="true"></i><a href="#"> 5 comments</a></li>
                            </ul>
                        </div>
                        <div class="gb-single-blog-right_myichi-text">
                            Mô tả về bài viết
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="gb-hotrotructuyen_myichi">
                        <aside class="widget">
                            <h3 class="widget_sidebar-title_myichi">Hỗ trợ trực tuyến</h3>
                            <div class="widget-content">
                                <div id="hotro_myichi">
                                    Thông tin ngắn về thông tin đại lý
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="gb-sidebar-tintucnoibat_myichi">
                        <aside class="widget">
                            <h3 class="widget_sidebar-title_myichi">Tin tức nổi bật</h3>
                            <div class="widget-content">
                                <ul>

                                    <li>
                                        <div class="gb-sidebar-tintucnoibat_myichi-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="item-text">
                                                <h2><a href="#">Tiêu đề bài tin tức</a></h2>
                                                <div class="timming"> <i class="fa fa-calendar"></i>Ngày tạo bài viết</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gb-sidebar-tintucnoibat_myichi-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="item-text">
                                                <h2><a href="#">Tiêu đề bài tin tức</a></h2>
                                                <div class="timming"> <i class="fa fa-calendar"></i>Ngày tạo bài viết</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gb-sidebar-tintucnoibat_myichi-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="images/aaaa.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="item-text">
                                                <h2><a href="#">Tiêu đề bài tin tức</a></h2>
                                                <div class="timming"> <i class="fa fa-calendar"></i>Ngày tạo bài viết</div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>
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
                                                <h2><a href="#">Tên sản phẩm</a></h2>
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
                                                <h2><a href="#">Tên sản phẩm</a></h2>
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
                                                <h2><a href="#">Tên sản phẩm</a></h2>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </aside>
                    </div>
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
