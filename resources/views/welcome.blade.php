@extends('master')

@section('css')
	<!-- Custom Welcome Page -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.css') }}" media="screen" >
@stop

@section('content')
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"><b>Don't Just Think Homestay, Think Better</b></h1>
				<h4 class="tagline">A New Way Home Abroad </h4>
				<p><a class="btn btn-default btn-lg" role="button">How it works</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div class="container" style="background-color:rgba(0,0,0,.5);">
		<div class="row">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search for ... " id="geocomplete" style="margin:4px;">
	            <span class="input-group-btn">
                    <form action="{{ url('host/room/') }}" style='display: inline' method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                        <button class="btn btn-default" type="button" style="border-radius:0; background:rgb(245,245,245)">Search</button>
                    </form>       
	            </span>
	        </div>
		</div>
	</div>

	<!-- Intro -->
	<div class="text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<div class="row" style="margin-left:30px; margin-right:30px;">
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Guidance</h4></div>
                <div class="h-body text-center">
                    <p>Applying school/college</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fast & Easy</h4></div>
                <div class="h-body text-center">
                    <p>Need a Homestay</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Professional Team</h4></div>
                <div class="h-body text-center">
                    <p>Wanna be a homestay</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Security & Privacy</h4></div>
                <div class="h-body text-center">
                    <p>other</p>
                </div>
            </div>
        </div> <!-- /row  -->

	</div>
	<!-- /Intro-->

	<!-- container -->
	<div class="container">
		<!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">See their stories</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
	</div>	<!-- /container -->

	<div class="container" style="margin-top:30px;">
		<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="http://placehold.it/800x300" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="http://placehold.it/800x300" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="http://placehold.it/800x300" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

	<div class="container">
        
        <div class="row">
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Guidance</h4></div>
                <div class="h-body text-center">
                    <p>We provide guidance on how to become a host family and what to expect as a guest</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fast & Easy</h4></div>
                <div class="h-body text-center">
                    <p>You are only one click away from being connected with your host/guest</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Professional Team</h4></div>
                <div class="h-body text-center">
                    <p>Our team will assist you in every way to provide you the best hosting experience</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Security & Privacy</h4></div>
                <div class="h-body text-center">
                    <p>You are only one click away from being connected with your host/guest</p>
                </div>
            </div>
        </div> <!-- /row  -->
    
    </div>


	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
	
@stop
		