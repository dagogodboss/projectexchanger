<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ app_name() }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="apple-touch-icon" href="pages/ico/60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta content="" name="description" />
		<meta content="" name="author" />

		<link href="{{asset('Frontend/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Frontend/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('Frontend/assets/plugins/swiper/css/swiper.css')}}" rel="stylesheet" type="text/css" media="screen" />


		<link class="main-stylesheet" href="{{asset('Frontend/pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
		<link class="main-stylesheet" href="{{asset('Frontend/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css" />

	</head>
<body class="pace-dark">

	<nav class="header bg-header transparent-light " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
		<div class="container relative">
			<div class="pull-left">
				<div class="header-inner">
					<big style="color: #fff;font-size: 30px;">
						<b>
							{{ app_name() }}
						</b>
					</big>
				</div>
			</div>
			<div class="pull-right">
				<div class="header-inner">
					<div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>
				</div>
			</div>
			<div class="pull-right menu-content clearfix" data-pages-direction="slideRight" id="header">
				<div class="pull-right">
					<a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
						<i class=" pg-close_line"></i>
					</a>
				</div>
				<div class="header-inner">
				<ul class="menu">
					<li>
						<a href="index-2.html" data-text="Home" class="active">Home </a>
					</li>
					<li>
						<a href="{{ route('register')}}" data-text="Pricing">Create Account </a>
					</li>
					<li>
						<a href="{{route('login') }}" data-text="Portfolio">Login </a>
					</li>
					<li>
						<a href="{{url('/contact')}}" data-text="Contact">Contact </a>
					</li>
					<li>
						<a class="btn btn-sm btn-bordered fs-12 btn-white hidden-sm hidden-xs" data-text="Buy now">Rates</a>
					</li>
				</ul>
				</div>

			</div>
		</div>
</nav>
	@yield('content')
	<section class="p-b-30 p-t-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="assets/images/logo_black.png" class="logo inline m-r-50" alt="">
					<div class="m-t-10 ">
						<ul class="no-style fs-11 no-padding font-arial">
							<li class="inline no-padding">
								<a href="{{url('/')}}" class=" text-master p-r-10 b-r b-grey">Home</a>
							</li>
							<li class="inline no-padding">
								<a href="{{ url('/about-us')}}" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">About Us</a>
							</li>
							<li class="inline no-padding">
								<a href="#" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">Contact us</a>
							</li>
							<li class="inline no-padding">
								<a href="#" class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10">Made with Pages</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 text-right font-arial sm-text-left">
					<p class="fs-11 no-margin small-text">
						<span class="hint-text ">Exclusive Design</span> 
						<span class="hint-text">See</span> Standard licenses &amp; Extended licenses
					</p>
					<p class="fs-11 muted">Copyright &copy; 2017 {{ app_name() }}. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</section>


<script src="{{asset('Frontend/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('Frontend/pages/js/pages.image.loader.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/swiper/js/swiper.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/velocity/velocity.ui.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/jquery-appear/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('Frontend/assets/plugins/animateNumber/jquery.animateNumbers.js')}}"></script>


<script type="text/javascript" src="{{asset('Frontend/pages/js/pages.frontend.js')}}"></script>


<script type="text/javascript" src="{{asset('Frontend/assets/js/custom.js')}}"></script>

</body>
</html>