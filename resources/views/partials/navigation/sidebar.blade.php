<nav class="page-sidebar" data-pages="sidebar">
	<div class="sidebar-header">
	<!-- <img src="assets/img/logo.png" alt="logo" class="brand" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> -->
	<big class="site-name">{{ app_name() }}</big>
	</div>
	<div class="sidebar-menu">
		<ul class="menu-items">
			<li class="m-t-30 ">
				<a href="{{ route('home') }}" class="detailed">
					<span class="title">Dashboard</span>
					<span class="details">notifaction</span>
				</a>
				<span class="icon-thumbnail"><i data-feather="shield"></i></span>
			</li>
			<li class="">
				<a href="social.html"><span class="title">Profile</span></a>
				<span class="icon-thumbnail"><i data-feather="users"></i></span>
			</li>
			<li class="">
				<a href="cards.html">
					<span class="title">
						Buy CryptCoin
					</span>
				</a>
				<span class="icon-thumbnail"><i data-feather="grid"></i></span>
			</li>
			<li class="">
			<a href="views.html">
			<span class="title">Sell CryptCoin</span>
			</a>
			<span class="icon-thumbnail"><i data-feather="airplay"></i></span>
			</li>
			<li class="">
			<a href="charts.html"><span class="title">Exchange</span></a>
			<span class="icon-thumbnail"><i data-feather="bar-chart"></i></span>
			</li>
			<li class="">
			<a href="" target="_blank">
				<span class="title">Deposit</span>
			</a>
			<span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
			</li>
			<li class="">
			<a href="{{ url('/logout') }}" target="_blank"><span class="title">Logout</span></a>
			<span class="icon-thumbnail">CG</span>
			</li>
		</ul>
	<div class="clearfix"></div>
	</div>

</nav>