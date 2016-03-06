	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{URL::to('/')}}">Basic Laravel</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li @section('active_home')@show><a href="{{URL::to('/')}}">Home</a></li>
					<li @section('active_about')@show><a href="{{URL::to('about-us')}}">About us</a></li>
					<li @section('active_service')@show><a href="{{URL::to('service')}}">Service</a></li>
					<li @section('active_portfolio')@show><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
					<li @section('active_blog')@show><a href="{{URL::to('blog')}}">Blog</a></li>
					<li @section('active_contact')@show><a href="{{URL::to('contact')}}">Contact</a></li>
				</ul>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>