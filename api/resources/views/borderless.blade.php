@extends('master')
@section('page-title')
	<title>Home</title>
@endsection
@section('page-body')
	<div class="borderless-header">
		@include('header')
		<div class="container pad-b-t-96">
		<div class="row">
			<div class="col-md-6">
				<h1 class="white">New! The TransferWise<br/>borderless account.</h1>
				<p class="white border-small-p">One account to send money, receive money, and spend around the world up to 8x cheaper than the banks. Bye bye bank fees, hello world.</p>
				<a class="btn m-l-1 m-r-1 btn-primary m-b-5" rel="noreferrer noopener" href="#">Get your free borderless account</a>
				<p><a href="#price-comp">See how we're 8x cheaper</a></p>
			</div>
			<div class="col-md-6"></div>
		</div>
		</div>
	</div>
	<div class="bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img class="image-full-width" src="image/DO_NOT_USE-borderless-trust-customers_@2x.png"/>
				</div>
				<div class="col-md-3">
					<img class="image-full-width" src="image/DO_NOT_USE-borderless-trust-fca_@2x.png"/>
				</div>
				<div class="col-md-3">
					<img class="image-full-width" src="image/DO_NOT_USE-borderless-trust-bloomberg_@2x.png"/>
				</div>
				<div class="col-md-3">
					<img class="image-full-width" src="image/DO_NOT_USE-borderless-trust-financialtimes_@2x.png"/>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="image-full-width" src="image/International-bank-details-lockup@2x.png"/>
				</div>
				<div class="col-md-5 offset-md-1">
					<h2 class="m-b-2 full-width-div text-center">Get paid from 30+ countries.</h2>
					<p>With your borderless account you get instant international bank details to receive money from over 30 countries around the world with zero fees. That means you'll get:</p>
					<ul>
					<li><strong>Australian account number and BSB code</strong><br></li>
					<li><strong>British account number and sort code</strong></li>
					<li><strong>European IBAN</strong></li>
					<li><strong>US account number and routing number</strong><br></li>
					</ul>
					<p>These are your personal details to get paid from the UK, the US, Australia, and any country in the Eurozone, and no-one pays any fees.</p>
					<p><a href="https://transferwise.com/borderless-account">Get started</a></p>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="pad-b-t-96 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="m-b-2">Spend at the real exchange rate.</h2>
					<p>Spend the currencies in your account anywhere in the world with the TransferWise debit Mastercard®. Get low conversion fees, and zero transaction fees.</p>
					<ul>
					<li>Free to pay with currencies in your account</li>
					<li>Free ATM withdrawals up to £200 per 30 days</li>
					<li>Only pay a small conversion fee when you convert your money — typically between 0.35% and 1%</li>
					<li>Automatically convert your money at the real exchange rate</li>
					<li>Accepted anywhere in the world that accepts Mastercard</li>
					</ul>
					<p><a href="https://transferwise.com/borderless-account">Get started</a></p>
				</div>
				<div class="col-md-6">
					<img class="img-max-height-450" src="image/TransferWisecard4@2x.png"/>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="img-max-height-450" src="image/28-currency-balances@2x.png" />
				</div>
				<div class="col-md-5 offset-md-1">
					<h2 class="m-b-2 m-t-45">Hold and convert 40+ currencies.</h2>
					<p>You can hold over 40 currencies in your TransferWise borderless account and switch between them in seconds — on the move, in the moment, or when the rate is right.</p>
					<p>You'll always get the real exchange rate and the low, transparent fees we're known for.</p>
					<p><a href="#coverage">See which currencies</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="section youtube jumbotron-image text-xs-center pad-b-t-96" style="background-image: url(https://lienzo.s3.amazonaws.com/images/Borderless_video_card.jpg)" id="borderless-explainer-video">
		<div class="row">
			<div class="vertical-align">
				<h2 class="m-b-3">The borderless account in 90 seconds.</h2>
				<a data-role="video" class="btn-play" href="https://www.youtube.com/watch?v=QRqfUpUlyZc">
					<svg id="Layer_1" class="hover" height="48px" width="48px" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.6 71.6"><title>play-2-hover</title><circle id="oval" cx="35.8" cy="35.8" r="35.3" style="fill:#00a4df;stroke:#00a4df"></circle><path id="play" d="M48.2,35.6a1,1,0,0,1,.55,1.3l0,0.1a3.17,3.17,0,0,1-.5.6L29.8,50.1c-0.8.6-1.5,0.2-1.5-.8V23.8c0-1,.7-1.3,1.5-0.8L48.2,35.6" style="fill:none;stroke:#fff;stroke-width:2px"></path></svg>
				</a>
			</div>
		</div>
	</div>
	@include('footer')							
	<script>								
		$(document).ready(function(){
			$(".video_btn").click(function(){						
				$('.play_video').show();
				$('.bg_video').hide();
				$('.video_middle').hide();
				$('.video_txt').hide();
				$('.close_btn').show();
			});
			$(".close_btn").click(function(){						
				$('.play_video').hide();
				$('.bg_video').show();
				$('.video_middle').show();
				$('.video_txt').show();
				$('.close_btn').hide();
			});
			
			// Swiper Slider
			var swiper = new Swiper('.swiper-container', {
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			});
		});
		// Navbar_dropdown
		 /*$(".nav-item").hover(function () {					 
			$(this).find('.ddr_menu').toggleClass("show");					 
			$(this).toggleClass("show");
		 });*/
	</script>
@endsection