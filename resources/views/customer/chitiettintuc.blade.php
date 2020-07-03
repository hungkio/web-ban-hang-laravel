@extends('layout')
@section('content')
<div class="gb-content">
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
{{-- public function convertDomain($domain, $subdomain)
    {
        $parsedUrl = parse_url($domain);
        $host = explode('.', $parsedUrl['host']);
        if ($host[0] == 'www') {
            $parsedUrl['host'] = substr_replace($parsedUrl['host'], $subdomain, 3, 0);
        } else {
            $parsedUrl['host'] = substr_replace($parsedUrl['host'], $subdomain . '.', 0, 0);
        }
        return $parsedUrl['host'] . $parsedUrl['path'] ?? '';
    } --}}
</div>
</div>
</div>
</div>

</div>



@endsection
@section('script')

@endsection
