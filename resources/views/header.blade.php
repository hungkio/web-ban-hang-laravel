<header>
    <div class="gb-header_myichi">

        <div class="gb-header-bottom_myichi sticky-menu">

            <div class="container">

                <div class="gb-header-bottom_myichi-left">

                    <h1><a href="/"><img src="{{asset('images/logo2.png')}}" alt="" class="img-responsive"></a></h1>

                </div>

                <div class="gb-header-bottom_myichi-right">

                    <nav class="gb-main-menu" >
                        <div class="main-navigation uni-menu-text">
                            <div class="cssmenu">
                                <ul>
                                    <li><a href="{{route('product.show')}}">Trang chủ</a></li>
                                    <li><a href="{{route('product.index')}}">Sản phẩm</a></li>
                                    <li class="has-sub"><a href="{{route('sale.index')}}">Chương trình khuyến mại</a></li>
                                    <li><a href="{{route('report.index')}}">Báo cáo</a></li>
                                    <li class="hiasda"><a href="#">Quản lí</a>
                                        <ul class="dmcuocdoi">
                                            <li><a href="{{route('guest.index')}}">Khách Hàng</a></li>
                                            <li><a href="{{route('rank.index')}}">Hạng</a></li>
                                            <li><a href="{{route('user.index')}}">Tài khoản</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('logout')}}">Đăng xuất</a></li>

                                </div>
                            </div>
                        </nav>

                    </div>

                </div>

            </div>
        </header>
        <script>
            $(function () {
                var count = 0;
                if (count == 0) {
                    $('#go_to_cart').prop('disabled' , true);
                }
                $('.btn_addCart').click(function () {
                    alert("Đã Thêm Sản Phẩm Vào Giỏ Hàng");
                    count++;
                    $('#go_to_cart').prop('disabled' , false);
                    $('#count').text(count);
                    let Html =
                    '<div class="row"><div class="col-md-6 col-sm-6 col-xs-6"><input type="hidden" name="ids[]" value="'
                    +$(this).parent().find('.id-product').val() +  '"><div>'
                    +$(this).parent().parent().siblings("h2").text() + ' :</div></div><div class="col-md-6 col-sm-6 col-xs-6">'
                    + $(this).parent().parent().parent().find('.prices-news_myichi').html() + '</div></div>';
                    $('#form-cart').find('div.modal-body').append(Html);
                });
            });
        </script>
        <style>
            .dmcuocdoi{
                display: none;
            }
        </style>
