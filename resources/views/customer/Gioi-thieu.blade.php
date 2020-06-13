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

    <div class="gb-gioithieu-page">
        <div class="container">
            <div class="box_about">
                <div class="content_about">

                    <div class="col-md-12">Nội dung giới thiệu </div>
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
