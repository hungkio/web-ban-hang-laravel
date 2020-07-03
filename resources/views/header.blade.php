<header>

    <div class="gb-header_myichi">

        <div class="gb-header_myichi-topbar">

            <div class="container">

                <div class="row">

                    <div class="col-md-10">

                        <div class="gb-header_myichi-topbar-left">

                            <ul style="text-align: right;">

                                <li><i class="fa fa-map-marker" aria-hidden="true"><img src="images/icon11.png" style="width: 57px;" alt=""></i>Giao hàng toàn quốc cung cấp sỉ/lẻ </li>

                                <li><i class="fa fa-phone" aria-hidden="true"> <img src="images/icon22.jpg" style="width: 57px;" alt=""></i> Hotline: 0931 45 35 75 - Hỗ trợ 24/7</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"> <img src="images/icon3.png" style="width: 57px;" alt=""></i>  Đổi trả lên đến 15 ngày
                                </li>


                            </ul>

                        </div>

                    </div>


                    <div class="col-md-2">
                        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> Giỏ hàng (<span id="count">0</span>)
                        </button>

                    </div>

                </div>

            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <form action="{{route('bill.create')}}" method="post" id="form-cart">
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center">Giỏ Hàng</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Thanh Toán</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>


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
