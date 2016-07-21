<!DOCTYPE html>
<html> 
<head>
<title>IncredibleNITT| Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{  asset('packages/home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{  asset('packages/home/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{ asset('packages/home/js/jquery-1.11.1.min.js') }}"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<style type="text/css">
</style>
</head>

<body>
<!-- bannner -->
<!-- Wrapper -->
    <div class="banner-photo">
        <div class="container">
            <div class="logo">
                <a href="/">IncredibleNITT <span>Find Your Species</span></a>
            </div>
            <div class="navigation">
                <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-13" id="cl-effect-13">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropbtn">Species</a>
                                    <div class="dropdown-content">
                                        <a href="/birds/show">Birds</a>
                                        <a href="#">Butterflies</a>
                                        <a href="#">Reptiles and others</a>
                                        <a href="#">Flora</a>
                                    </div>
                                </li>
                                <li><a href="" class="active">Events</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="/photo-of-the-month">Photo of the month</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropbtn">Useful info</a>
                                    <div class="dropdown-content">
                                        <a href="#">Bird Watching</a>
                                        <a href="#">Facts about Snakes</a>
                                        <a href="#">Interesting Links</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                    <!-- /.navbar-collapse -->

<div class="news">
        <div class="container">
            <h3><span>Events</h3>
            
            <div class="news-grids">
                <section class="main">
                    <section class = "thumbnails">
                        @foreach($events as $event)
                        <div class="col-md-4 news-grid">
                            <div class="news-grid1" style="padding:15px;">
                                <div class="news-grid1-sub">
                                    <h4><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                        {{ $event['date'] }}</h4>
                                    <h5>{{ $event['eventName'] }}</h5>
                                    
                                </div>
                                <img src="images/10.jpg" alt=" " class="img-responsive" />
                                <ul>
                                    <li style="position:absolute; right:45px; font-size:15px;"><a href="{{ '/eventinfo/'.$event['eventName'] }}" data-poptrox="iframe,1000x400">Read More<i class="glyphicon glyphicon-share" aria-hidden="true"></i></a></li>
                                    <div class="cleafix"> </div>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        </section>
                    </section>
                 <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <h3><span>News</h3>
            <p class="dolore">Consectetur adipiscing elit, sed do 
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                minim veniam.</p>
        </div>
    </div>

<!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-4 footer-grid-left">
                    <h3>twitter feed</h3>
                    <ul>
                        <li><a href="single.html">It is a long established fact that a reader will 
                        be distracted by the readable content of a page when looking at 
                        its layout.</a><span>15 minutes ago</span></li>
                        <li><a href="mailto:info@example.com" class="cols">@NASA</a> & <a href="mailto:info@example.com" class="cols">
                            @orbital science</a> <a href="single.html">readable content of a page when looking at 
                            its layout</a><span>45 minutes ago</span></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grid-left">
                    <h3>Newsletter</h3>
                    <form>
                        <input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
                        <input type="submit" value="Submit" >
                    </form>
                </div>
                <div class="col-md-4 footer-grid-left">
                    <h3>about us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        <span>But I must explain to you how all this mistaken idea of denouncing
                        pleasure and praising pain was born and I will give you a complete 
                        account of the system, and expound the actual teachings of the 
                        great explorer.</span>
                        </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p>&copy 2016 Inventor. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
                </div>
                <div class="footer-bottom-right">
                    <ul>
                        <li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
                        <li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
                        <li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //footer -->

<!-- Scripts -->
            <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/jquery.poptrox.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/skel.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/main.js') }}"></script>
</body>
</html>