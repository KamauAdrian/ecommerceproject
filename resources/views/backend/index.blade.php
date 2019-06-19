@extends('backend.layouts.master')
@section('title','Dashboard')
@section('cssblock')
    <link rel="shortcut icon" type="image/x-icon" href="{{url('jewel/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('jewel/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('jewel/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/normalize.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/meanmenu.min.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{url('jewel/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('jewel/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('jewel/css/responsive.css')}}">
@endsection
@section('content')
<div class="all-content-wrapper">

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Dashboard V.2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-admin container-fluid res-mg-t-15">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn">
                            <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$100,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #00b5c2;"></i>Shoes</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 356px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>







{{--traffic analysis--}}

    <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% last month</small> Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>









{{--product-new-list-area--}}
    <div class="product-new-list-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="img/new-product/5.jpg" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="img/new-product/6.jpg" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="img/new-product/7.jpg" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="img/new-product/5.jpg" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









{{--sales--}}
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Order Statistic</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <a href="#" class="btn btn-dark-blue btn-circle active tip-top" data-toggle="tooltip" title="Upload">
                                            <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #888;"></i>Shoes</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                            </li>
                        </ul>
                        <div id="extra-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{--authors--}}
    <div class="author-area-pro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap">
                        <div class="widget-head-info-box">
                            <div class="persoanl-widget-hd">
                                <h2>Jon Royita</h2>
                                <p>Founder of Uttara It Park</p>
                            </div>
                            <img src="{{url('jewel/img/notification/5.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                            <div class="social-widget-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Jhon Royita</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="author-widgets-single res-mg-t-30">
                        <div class="author-wiget-inner">
                            <div class="perso-img">
                                <img src="{{url('jewel/img/notification/6.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="persoanl-widget-hd persoanl1-widget-hd">
                                <h2>Fire Foxy</h2>
                                <p>Founder of Uttara It House</p>
                            </div>
                            <div class="social-widget-result social-widget1-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Fire Foxy</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                        <div class="widget-head-info-box">
                            <div class="persoanl-widget-hd">
                                <h2>Jon Royita</h2>
                                <p>Founder of Uttara It Park</p>
                            </div>
                            <img src="{{url('jewel/img/contact/2.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                            <div class="social-widget-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Jhon Royita</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jsblock')
    <script src="{{url('jewel/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{url('jewel/')}}js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{url('jewel/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{url('jewel/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{url('jewel/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{url('jewel/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{url('jewel/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{url('jewel/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{url('jewel/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('jewel/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{url('jewel/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{url('jewel/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{url('jewel/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{url('jewel/js/morrisjs/morris.js')}}"></script>
    <script src="{{url('jewel/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{url('jewel/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('jewel/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{url('jewel/js/calendar/moment.min.js')}}"></script>
    <script src="{{url('jewel/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{url('jewel/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{url('jewel/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{url('jewel/js/main.js')}}"></script>

    <script src="{{url('js/chartjs.js')}}"></script>
    <script src="{{url('js/excanvas.min.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery.ui.custom.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.flot.min.js')}}"></script>
    <script src="{{url('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{url('js/jquery.peity.min.js')}}"></script>
    <script src="{{url('js/fullcalendar.min.js')}}"></script>
    <script src="{{url('js/matrix.js')}}"></script>
    <script src="{{url('js/matrix.dashboard.js')}}"></script>
    <script src="{{url('js/jquery.gritter.min.js')}}"></script>
    <script src="{{url('js/matrix.interface.js')}}"></script>
    <script src="{{url('js/matrix.chat.js')}}"></script>
    <script src="{{url('js/jquery.validate.js')}}"></script>
    <script src="{{url('js/jquery.wizard.js')}}"></script>
    <script src="{{url('js/jquery.uniform.js')}}"></script>
    <script src="{{url('js/select2.min.js')}}"></script>
    <script src="{{url('js/matrix.popover.js')}}"></script>
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/matrix.tablecds.js')}}"></script>
    <script src="{{url('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection