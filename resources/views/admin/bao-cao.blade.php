@extends('layout')
@section('title','User Management')
@section('content')

<div class="container" >

<div class="row">
    <div class="col-lg-12 offset-md-12 mb-2 col-md-6 col-sm-8">
        <form action="" id="time_form">
            @csrf
            <label class="baocao1" for="">Chọn thời gian báo cáo</label>
            <div style="margin-bottom: 15px; overflow: hidden;">
                <div class="col-md-1">
                    <label for="">Từ: </label>
                </div>
                <div class="col-md-11">
                    <input type="month" name="start_date" max="3000-12" id="start_date">
                </div>
            </div>
            <div>
                <div class="col-md-1">
                    <label for="">Đến: </label>
                </div>
               <div class="col-md-11">
                    <input type="month" name="end_date" max="3000-12" id="end_date">
               </div>
            </div>
            <button type="button" id="time_change" class="btn" style="background: #0099FF; color: white; font-weight: bold; margin-top: 25px; ">Show</button>
        </form>
    </div>
</div>
</div>
<div class="container" >
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body dong1">
                <h3 class="title">Khách Hàng</h3>
                <div class="gachchan"></div>
                <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-4 tieu">KH mới</div>
                    <div class="col-md-4 tieu">Tổng KH</div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-4 " id="new_guest">10</div>
                    <div class="col-md-4 " id="total_guest">20</div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card ">
            <div class="card-body dong1">
                <h3 class="title">Doanh Thu</h3>
                <div class="gachchan"></div>
                <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-3 text-center no-border" style="border-right: 1px solid">
                        <div class="tieu">Kỳ này</div>
                        <div class="main-number pt-1 total-person " id="medianSurveyMember">10</div>
                    </div>
                    <div class="col-md-4 text-center no-border" style="border-right: 1px solid">
                        <div class="tieu">Kỳ trước</div>
                        <div class="main-number pt-1 total-person " id="medianSurveyMember">20</div>
                    </div>
                    <div class="col-md-3 text-center no-border" >
                        <div class="tieu">Tỷ lệ gia tăng</div>
                        <div class="main-number pt-1 total-person " id="medianSurveyMember">0.5</div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<h3 class="title">Mức tín dụng đánh giá</h3>
<div class="gachchan"></div>
<div class="col-md-1"></div>
    <div class="col-md-3 ">
        <div class="card ">
            <div class="card-body dong1"> 
                <h3 class="card-title tieu col-md-12">Rank Silver</h3>
                <span class="main-number" id="rankA">10000  -  </span>
                <span class="main-number pt-1" id="rankARatio">25%</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card ">
            <div class="card-body dong1">
                <h3 class="card-title tieu col-md-12">Rank Gold</h3>
                <span class="main-number" id="rankB">5000  -  </span>
                <span class="main-number pt-1" id="rankBRatio">25%</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card ">
            <div class="card-body dong1">
                <h3 class="card-title tieu col-md-12">Rank Diamon</h3>
                <span class="main-number" id="rankC">10000  -  </span>
                <span class="main-number pt-1" id="rankCRatio">25%</span>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="card ">
        <div class="card-body ">
            <h3 class="card-title tieu title col-md-12 ">Bảng kê khai tổng quan</h3>
            <!-- <div class="gachchan"></div> -->
            <div class="col-md-12 "  style="margin-bottom: 25px;">
                <div class="card ">
                    <div class="card-body">
                        
                        <div class="row ">
                        <div class="col-md-2"></div>
                           <div class="col-md-8 dong1">
                            <h3 class="card-title tieu col-md-12">Thiết bị</h3>
                           
                                <div class="col-md-6">
                                <div class="main-number tieu" id="rankA">Bán ra</div>
                                <div class="main-number pt-1" id="rankARatio">25</div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-number tieu" id="rankA">Còn lại</div>
                                <div class="main-number pt-1" id="rankARatio">20</div>
                            </div>
                           </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 dong1" style="margin-bottom: 25px;">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-4" >
                <div class="card ">
                    <div class="card-body">
                        <h3 class="card-title tieu col-md-12">Phí Chi</h3>
                        <div class="main-number" id="rankA">10000</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="card ">
                    <div class="card-body">
                        <h3 class="card-title tieu col-md-12">Phí Thu</h3>
                        <div class="main-number" id="rankB">5000</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body">
                        <h3 class="card-title tieu col-md-12">Số Chương Trình khuyến mãi</h3>
                        <div class="main-number" id="rankC">10000</div>
                    </div>
                </div>
            </div>
           <!--  <div class="col-md-1"></div> -->

            </div>
            
        </div>
    </div>
</div>
</div>

</div>
@endsection
@section('script')
<script src="/js/report/index.js"></script>
<script>
    let route = '{{route('report.data')}}';
    var newDate = new Date();

</script>
@endsection
<style>
    label.baocao1 {
        font-size: 30px;
    margin-top: 40px;
    text-align: center;
    margin-bottom: 40px;
}
h3.title {
    color: #0099FF;
    font-size: 25px;
    font-weight: 600;
    text-align: center;
}
.card-body {
    /*border: 1px solid;*/
/*    padding-bottom: 24px;
    background: #ddd;*/
    text-align: center;
}
.dong1 {
    border: 3px dashed #0099FF;
    padding-bottom: 24px;
    background: #ddd;
    text-align: center;
}
.gachchan{
    width: 50px;
    height: 3px;
    margin: 0 auto;
    margin-bottom: 25px;
    background: #0099ff;

}
.tieu{
    font-weight: bold;
    font-size: 15px;
    padding-bottom: 15px;
}
.col-md-11 input{
    border: 2px solid #0099FF;
    border-radius: 5px;
    height: 30px;
}
.col-md-1 label{
    padding:7px;
}
</style>
