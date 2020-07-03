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
                                    <li><a href="#">Trang chủ</a></li>
                                    <li><a href="#">Sản phẩm</a></li>
                                    <li class="has-sub"><a href="#">Chương trình khuyến mại</a></li>
                                    <li><a href="#">Báo cáo</a></li>
                                    <li><a href="#">Quản lí</a></li>
                                    <!-- <li><a href="#">Tin tức</a></li></ul> -->
                                    <li><a href="#">Đăng xuất</a></li>

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
                $('.btn_addCart').click(function () {
                    alert("Đã Thêm Sản Phẩm Vào Giỏ Hàng");
                    count++;
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
