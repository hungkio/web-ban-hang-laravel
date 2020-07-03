<div class="slideslide" >
    
    <div class="gb-slideshow_myichi gb-slide-mobile">

        <div class="gb-slideshow_myichi-slide owl-carousel owl-theme">
      
    
    
                <div class="item">
    
                    <img src="images/banner1.png" style="height:500px;"  alt="" class="img-responsive">
    
                </div>
                <div class="item">
                    
                    <img src="images/banner2.jpg" style="height:500px;" alt="" class="img-responsive">

                </div>

                <div class="item">
                    
                    <img src="images/banner3.jpg" style="height:500px;" alt="" class="img-responsive">

                </div>

                <div class="item">
                    
                    <img src="images/banner4.jpg" style="height:500px;" alt="" class="img-responsive">

                </div>
    
        </div>
    
    </div>
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

</div>