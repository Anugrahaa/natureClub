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
</head>
    
<body>
<!-- bannner -->
<!-- Wrapper -->
    <div class="banner">
        <div class="container">
            <div class="logo">
                <a href="index.html">IncredibleNITT <span>Find Your Species</span></a>
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
                                <li><a href="/show" class="active">Birds</a></li>
                                <li><a href="short-codes.html">Events</a></li>
                                <li><a href="services.html">Our Team</a></li>
                                <li><a href="mail.html">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div id="wrapper">
		<link rel="stylesheet" href="{{ asset('packages/template/assets/css/main.css') }}" />
		

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
							@foreach($birds as $bird)
							<div class='col-md-4'>
									<a href="/birdinfo" data-poptrox="iframe,600x400">
										<img src="{{ asset('images/').'/'.$bird['picture'] }}" alt="" />
										<h3>{{ $bird['commonName'] }}</h3>
									</a>
							</div>
							@endforeach
							
							</section>

					</section>

			</div>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- <div class="banner-info">
                <h1>The Largest Selection Of <span>Apartments</span></h1>
                <p>most the best investment of your money.</p>
            </div> -->
        </div>
    </div>
<!-- //bannner -->
<!-- Wrapper -->
			
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
			<script src="{{ asset('packages/template/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('packages/template/assets/js/jquery.poptrox.min.js') }}"></script>
			<script src="{{ asset('packages/template/assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('packages/template/assets/js/main.js') }}"></script>
</body>
</html>