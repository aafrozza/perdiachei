<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>PerdiAchei</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/component.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/normalize.css" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/settings.css" media="screen" />

</head>
<!-- END HEAD -->
<body>
<div class="main-wrapper">

	<header id="ha-header" class="ha-header ha-header-hide "  >
		<div class="ha-header-perspective">
	<div class="ha-header-front navbar navbar-default">
			  <div class="compressed">
				<div class="navbar-header">
				  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a href="#" class="navbar-brand compressed"><img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png" data-src-retina="assets/img/logo2x.png" width="146" height="32"/></a>
				</div>
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav navbar-right" >
					<li ><a href="{{ url('/') }}">Home</a></li>
					<li ><a href="tour.html">Como Funciona</a></li>
					<li ><a href="#">Encontre</a></li>
					<li ><a href="#">Devolva</a></li>
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li ><a href="{{ url('/register') }}">Registre-se</a></li>
					@if (Route::has('login'))
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li ><a href="{{ url('/register') }}">Registre-se</a></li>
		            @endif
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
	
			</div>
		</div>
	</header>
	
<div class="section ha-waypoint"  data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
<div role="navigation" class="navbar navbar-transparent navbar-top">
     <div class="container"> 
	  <div class="compressed">
        <div class="navbar-header">
		   <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><img src="assets/img/logo.png" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="146" height="32" alt=""/></a>		 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
			<li ><a href="{{ url('/') }}">Home</a></li>
			<li ><a href="{{ url('/como-funciona') }}">Como Funciona</a></li>
			<li ><a href="#">Perdi</a></li>
			<li ><a href="#">Achei</a></li>
			@if (Route::has('login'))
				<li><a href="{{ url('/login') }}">Login</a></li>
				<li ><a href="{{ url('/register') }}">Registre-se</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
	<!--BEGIN SLIDER -->
	<div class="tp-banner-container">
		<div class="tp-banner" id="home" >
			<ul>
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="assets/img/bg/slider-principal.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">


					<!-- LAYERS -->
					<div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider"
							data-x="center" data-hoffset="0"
							data-y="60"
							data-speed="500"
							data-start="800"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6"><h2 class="text-white custom-font title ">ENTENDA COMO FUNCIONA</h2>

					</div>
				</li>					
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="assets/img/bg/picture-1.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

					<!-- LAYERS -->
					<div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider"
							data-x="center" data-hoffset="0"
							data-y="60"
							data-speed="500"
							data-start="800"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6"><h2 class="text-white custom-font title ">WE'VE DESIGN<br> EVERYTHING JUST FOR YOU</h2>

					</div>
					<div class="tp-caption sfb slider tp-resizeme slider"
						data-x="center"
						data-hoffset="0"
						data-y="240"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">	<a href="#" class="btn btn-danger btn-lg  btn-large m-r-10">Localize</a>
					</div>
					
				</li>	
				<!-- SLIDE  -->
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
	<!--END SLIDER
		
	-->
			

	
</div>
<div class="section ">
	<div class="container">
		<div class="p-t-40 p-b-40">
			<h2 class="text-center">Create the <span class="semi-bold">impossible</span>, We’ve <span class="semi-bold">designed everything</span> beyond... <a href="#" class="btn btn-purple btn-lg  btn-large m-r-10">BUY IT NOW</a></h2>
		</div>
	</div>
</div>	
<div class="section white ha-waypoint"  data-animate-down="ha-header-color" data-animate-up="ha-header-hide" >
		<div class="container">
		<div class="p-t-60">
		<div class="row">
		<div class="col-md-12 feature-list ">
			<div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
			<h4 class="title">FULL PACKAGE</h4>
			<p>
			We combine intelligent and creative thinking with stimulating design to keep your brand engaging and help challenging brands find their clarity.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
			<h4 class="title">CUSTOMIZATION</h4>
			<p>
			Make any design your own using the Style Editor. Personalize fonts, colors, and layouts to create the custom look you want.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
			<h4 class="title">SOCIAL</h4>
			<p>
			Import. Sync. Publish. Make your website the center of your online identity on the web with our powerful social integrations.
			</p>
			</div>
		</div>
		</div>
		<br>
		<div class="row">
		<div class="col-md-12 feature-list">
			<div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="1200">
			<h4 class="title">TEMPLATES</h4>
			<p>
			Squarespace websites are created with modern browsers and mobile devices in mind. They employ the latest HTML, CSS and Javascript techniques.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1500">
			<h4 class="title">CUSTOMIZATION</h4>
			<p>
			Make any design your own using the Style Editor. Personalize fonts, colors, and layouts to create the custom look you want.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1800">
			<h4 class="title">SOCIAL</h4>
			<p>
			Import. Sync. Publish. Make your website the center of your online identity on the web with our powerful social integrations.
			</p>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="section relative">
			<div class="row">

				<img src="assets/img/browser.png" alt="" class="resize p-t-60 col-md-9 hidden-xs" style="" data-ride="animated" data-animation="fadeInUp" data-delay="300">
		
		
				<img src="assets/img/phone.png"	alt="" class="resize p-t-60 col-md-2 push-bottom hidden-sm hidden-xs visible-lg visible-md" data-ride="animated" data-animation="fadeInRight" data-delay="600" style="right:9%">			
			
		
			</div>
		</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>

<div class="section grey">
	<div class="container">
	  <div class="p-t-40 p-b-50 ">
		<div class="row">
			<div class="col-md-12">
			  <h2><span class="normal">Make life much easier</span><br>
			  download webarch full package with <span class="normal">frontend</span><button type="button" class="btn btn-primary btn-cons m-l-30">Subscribe</button></h2>
			</div>
		</div>
		<br>
		<div class="row feature-list">		
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="300">
			<h4 class="title custom-font">MILLIONS OF POSSIBILITIES</h4>
			<p class="p-r-50">
				Hundreds of free desktop apps Enjoy a mobile-like app experience on your PC, with free apps and games like Facebook and Farmville 2.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
			<h4 class="title custom-font">REAL TIME NOTIFICATIONS</h4>
			<p class="p-r-50">
				Stay informed with notifications from your favorite apps keeping you up to date on your emails, tweets and more.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
			<h4 class="title custom-font">ONE CLICK AWAY</h4>
			<p class="p-r-50">
				Find, organize, and launch your favorite apps, sites, and files faster and easier than ever before.
			</p>
			</div>
		
		</div>
		</div>
	</div>
</div>	
<div class="section white">
		<div class="container">
			<div class="p-t-60 p-b-50 ">
				<div class="row feature-list">
					<div class="col-md-12 text-center">
						<h3>Confira nossos números</h3>
						<h3>Quantidade de parceiros, usuários e resultados com as entregas de documentos e pertences</h3><br>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">PARCEIROS</h4>					
						<h1 class="custom-font"><span class="number-animator" data-value="750" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
							<div class="progress transparent progress-small no-radius ">
							  <div class="progress-bar progress-bar-black animated-progress-bar " data-percentage="100%"></div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">ENCONTRADOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="35000" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="100%" ></div>
						</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">DEVOLVIDOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="22000" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="100%"></div>
						</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">USUÁRIOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="45000" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="100%"></div>
						</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
</div>
<div class="section table-layout">	
			<div id="working-section" class="table-cell v-middle">	
				<div >
				<h3 class="text-white text-center custom-font no-margin">Mais de 20 mil pessoas localizaram seus perdidos através de nossa plataforma</h3>
				</div>
			</div>
</div>
<div class="section white">
		<div class="container">
			<div class="p-t-60 p-b-50">
			  <div id="testomonials" class="owl-carousel row">
				<div class="item">
					<div class="col-md-6  col-md-offset-3">
						<h3 class="normal text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="normal text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="semi-bold text-center">
						I’m really happy that webarch is able to offer 
support specifically tailored to creative businesses and I’d love Nottingham to become renowned for this.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
		</div>
	</div>
	</div>
</div>
<div class="section black">
		<div class="container">
			<div class="p-t-60 p-b-60">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-center text-white m-b-30">Would you like to sign up for our <span class="semi-bold">programme?</span> 
Register your interest below</h2>
					<div class="row form-row">
                      <div class="col-md-6 col-md-offset-2 no-padding  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input name="form3Occupation" id="form3Occupation" type="text" class="form-control " placeholder="Enter your email addres">
                      </div>
					  <div class="col-md-4 col-sm-4 col-xs-4 xs-p-l-10">
						<button type="button" class="btn btn-primary btn-cons">Subscribe</button>
					  </div>	
                    </div>
					<div class="row">
						<a href="#" class="text-white text-center col-md-11 col-sm-11 col-xs-11">or suscribte to newsletter</a>
					</div>
					<div class="clearfix"></div>
					<div class="row m-t-30">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox1" type="checkbox" value="1">
						  <label for="checkbox1">Daily newsletters</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox2" type="checkbox" value="1">
						  <label for="checkbox2">No promotions</label>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox3" type="checkbox" value="1">
						  <label for="checkbox3">Industry specific events</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox4" type="checkbox" value="1">
						  <label for="checkbox4">Accessing News letters</label>
						</div>
						</div>
					</div>
					</div>					
				</div>
				
			</div>
		</div>
</div>
<div class="section white footer">
		<div class="container">
			<div class="p-t-30 p-b-50">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
					<img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png" data-src-retina="assets/img/logo2x.png" width="119" height="22"/>
					</div>
					<div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
						<address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">	
							Corporate Park<br>
							Rod. Jose Carlos Daux, 8600<br>
							Florianópolis, SC - Brasil<br>
							Sala 9 Bl 2
						</address>
						<div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
							<div>(0039) 389 957 5552</div>
							support@revox.io
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
						Copyright © 2017
						Privacy Policy
						Design by DW
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
					<div class="bold">RECRUITMENT</div>
					We are frequently on the lookout for new talent!
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
					Siga nossas redes sociais
					We are frequently on the lookout for new talent!
					</div>
				</div>
			</div>
		</div>
</div>
</div>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/core.js"></script>

</body>
