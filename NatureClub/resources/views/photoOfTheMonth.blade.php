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
                                <li><a href="/" class="active">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropbtn">Species</a>
                                    <div class="dropdown-content">
                                        <a href="/show">Birds</a>
                                        <a href="#">Butterflies</a>
                                        <a href="#">Reptiles and others</a>
                                        <a href="#">Flora</a>
                                    </div>
                                </li>
                                <li><a href="">Events</a></li>
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
                    <div id="wrapper" style="background-color:white; color:black; font-family: 'Slabo 27px', serif; font-size:1rem; line-height:1.5rem;">
		              <!-- <link rel="stylesheet" href="{{ asset('packages/template/assets/css/main.css') }}" /> -->
                    	<div id="photo-of-the-month" style="padding:1rem;">
                            Photo of the month 
                        </div>
                        <div id="caption" class="col-md-6" style="padding:1rem; font-size:1.5rem; font-weight:bold;">
                            {{$photo['caption']}} 
                        </div>
                        <div class="col-md-6" style="text-align:right;padding:1rem;">
                            <span style="cursor:pointer;" onclick="prev()">Previous</span>
                            <span>&nbsp;&nbsp;</span>
                            <span style="cursor:pointer;" onclick="next()">Next</span>
                        </div>
                        <div style="width:100%;height:60%; border-bottom:1px solid black; padding:0.5rem;">
                            <img src="{{ asset('PhotoOfTheMonth').'/'.$photo['photo'] }}" style="width:100%; height:100%;" />
                        </div>
                    <div id="photo-content" >
                        <div id="date" class="col-md-6"  style="padding-bottom:1rem;"></div>
                        <div id="photo-by" class="col-md-6" style="text-align:right; padding-bottom:1rem;">Photo by: {!!$photo['photo-by']!!}</div>
                        
                        <div id="desc" class="col-md-12" style="padding-bottom:1rem;">{!!html_entity_decode($photo['description'])!!}</div>                    
                    </div>  
                    </div>
                               
            </div>
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
    <script type="text/javascript">
            function x()
            {
                var mon = {!! $photo['month'] !!};
                var month = ['January','February','March','April','May','June','July','August','September','October','November','December'];

                document.getElementById('date').innerHTML=month[mon-1]+" "+{!! $photo['year'] !!}; 
                //alert($("#date").html());
            }
            window.onload = x();

            function prev () {
                var mon = {!! $photo['month'] !!};
                var yr = {!! $photo['year'] !!};
                if(yr==16)
                {
                    if(mon==1) 
                        window.location = '/photo-of-the-month/16/1';
                    else mon--;
                }
                else if(mon==1 && yr>16) 
                {
                    yr--;
                    mon=12;
                }
                else
                {
                    mon--;
                }
                window.location = '/photo-of-the-month/'+yr+'/'+mon;
            }
            function next () {
                var mon = {!! $photo['month'] !!};
                var yr = {!! $photo['year'] !!};
                if(mon==12)
                {
                    mon=1;
                    yr++;
                }
                else
                {
                    mon++;
                }
                window.location = '/photo-of-the-month/'+yr+'/'+mon;
            }
    </script>
        <!-- Scripts -->
            <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/jquery.poptrox.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/skel.min.js') }}"></script>
            <script src="{{ asset('packages/template/assets/js/main.js') }}"></script>
</body>
</html>