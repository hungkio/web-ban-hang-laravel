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


    <div class="gb-page-lienhe_myichi">

        <div class="container">

            <div class="row">
                <div class="formdathang">
                    <h2 class="tieude1">Tên cửa hàng</h2>

                    <ul>

                        <li class="tieude2"><strong>Địa chỉ:</strong> Thông  tin địa chỉ </li>

                        <li class="tieude2"><strong>Số điện thoại:</strong>  0123456789</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <div class="gb-page-lienhe_myichi-left">

                        <div class="gb-dangkytuvan_myichi">
                            <form action="" method="post">
                                <h3>Đăng ký tư vấn</h3>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="" placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" required="" placeholder="Điện thoại">
                                </div>
                                <div class="form-group">
                                    <textarea class="input-xlarge form-control" id="message" name="note" rows="8" placeholder="Ghi chú"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="gb-btn gb-btn-send" type="submit" name="lien_he">Gửi</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="gb-page-lienhe_myichi-right">

                        <div class="gb-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8747150707068!2d105.8001905153767!3d21.037698392848014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3f06c55999%3A0xc5d36d8bd188f039!2zMSBOZ8O1IDkyLCBRdWFuIEhvYSwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1531710829794" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

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
