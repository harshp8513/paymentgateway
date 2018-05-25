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
			<div class="vertical-align text-center">
				<h2 class="m-b-3 white">The borderless account in 90 seconds.</h2>
				<a data-role="video" class="btn-play" href="https://www.youtube.com/watch?v=QRqfUpUlyZc">
					<svg id="Layer_1" class="hover" height="48px" width="48px" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.6 71.6"><title>play-2-hover</title><circle id="oval" cx="35.8" cy="35.8" r="35.3" style="fill:#00a4df;stroke:#00a4df"></circle><path id="play" d="M48.2,35.6a1,1,0,0,1,.55,1.3l0,0.1a3.17,3.17,0,0,1-.5.6L29.8,50.1c-0.8.6-1.5,0.2-1.5-.8V23.8c0-1,.7-1.3,1.5-0.8L48.2,35.6" style="fill:none;stroke:#fff;stroke-width:2px"></path></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h2 class="m-b-2 up-to-8x">Up to 8x cheaper than high street banks</h2>
					<p class="text-center">We asked an independent research agency to compare the borderless account to 21 banks worldwide. Here's how we compare to UK current accounts for managing your money in Europe.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1 price-table price-comparison">
					<table class="table table-bordered m-t-5">
						<tbody>
							<tr class="primary text-center">
								<th class="text-xs-left"><span>Compare the costs</span></th>
								<th class="text-center featured-header-cell">
									<img src="https://lienzo.s3.amazonaws.com/images/transferwise-white.svg" alt="TransferWise">
								</th>
								<th class="text-center">
									<img src="https://lienzo.s3.amazonaws.com/images/barclays-white.svg" alt="Barclays">
								</th>
								<th class="text-center">
									<img src="https://lienzo.s3.amazonaws.com/images/lloyds-white.svg" alt="Lloyds">
								</th>
								<th class="text-center">
									<img src="https://lienzo.s3.amazonaws.com/images/natwest-white1.svg" alt="NatWest">
								</th>
							</tr>
							<tr>
								<td><span class="text-primary">Cost to create account</span></td>
								<td class="text-center featured-cell">
									<span>Free</span>
								</td>
								<td class="text-center">
									<span>Free</span>
								</td>
								<td class="text-center">
									<span>Free</span>
								</td>
								<td class="text-center">
									<span>Free</span>
								</td>
							</tr>
							<tr>
								<td><span class="text-primary">Send £200 to EUR </span></td>
								<td class="text-center featured-cell">
									<span class="text-success">70p</span>
								</td>
								<td class="text-center">
									<span>£5.50</span>
								</td>
								<td class="text-center">
									<span class="text-danger">£15.91</span>
								</td>
								<td class="text-center">
									<span>£14.45</span>
								</td>
							</tr>
							<tr>
								<td><span class="text-primary">Spend £200 on debit card in EUR</span></td>
								<td class="text-center featured-cell">
									<span class="text-success">70p</span>
								</td>
								<td class="text-center">
									<span>£7.66</span>
								</td>
								<td class="text-center">
									<span class="text-danger">£8.64</span>
								</td>
								<td class="text-center">
									<span>£7.66</span>
								</td>
							</tr>
							<tr>
								<td><span class="text-primary">Withdraw £200 / month cash in EUR</span></td>
								<td class="text-center featured-cell">
								 <span class="text-success">£0</span>
								</td>
								<td class="text-center">
									<span>£9.16</span>
								</td>
								<td class="text-center">
									<span>£9.64</span>
								</td>
								<td class="text-center">
									<span class="text-danger">£11.66</span>
								</td>
							</tr>
							<tr>
								<td><span class="text-primary">Receive AUD, EUR, GBP and USD into your account</span></td>
								<td class="text-center featured-cell">
									<span class="text-success">Free</span>
								</td>
								<td class="text-center">
									<span>EUR-only</span>
								</td>
								<td class="text-center">
									<span class="text-danger">Not possible</span>
								</td>
								<td class="text-center">
									<span class="text-danger">Not possible</span>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="text-center m-t-5 p-t-5">Data collected by an independent research agency. <a href="https://transferwise.com/help/article/2924304/good-to-know/how-is-transferwise-quicker-cheaper-and-easier-than-the-banks">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96 bg-dark-blue">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h2 class="up-to-8x text-center white">No monthly fees, no minimum balance, just the real exchange rate.</h2>
				</div>
			</div>
			<div class="row">
				<table class="table no-monthly-fees text-center m-t-45">
					<tbody>
						<tr>
							<td class="col-xs-2">
								<h5 class="text-success m-t-1">Subscription</h5>
								<div class="m-t-4">
									<span style="vertical-align: top;">£</span>
									<span class="display-3 text-success m-t-3" style="vertical-align: bottom;">0</span>
									<span style="vertical-align: bottom;">/month</span>
								</div>
							</td>
							<td class="col-xs-2">
								<h5 class="text-success m-t-1">Add money</h5>
								<div class="m-t-4">
									<span style="vertical-align: top;">£</span>
									<span class="display-3 text-success m-t-3" style="vertical-align: bottom;">0</span>
									<span style="vertical-align: bottom;">/transfer</span>
								</div>
							</td>
							<td class="col-xs-2">
								<h5 class="text-success m-t-1">Receiving fees</h5>
								<div class="m-t-4">
									<span style="vertical-align: top;">£</span>
									<span class="display-3 text-success m-t-3" style="vertical-align: bottom;">0</span>
									<span style="vertical-align: bottom;">/transfer</span>
								</div>
							</td>
							<td class="col-xs-2">
								<h5 class="text-success m-t-1">Free bank details</h5>
								<div class="m-t-4">
									<span style="vertical-align: top;">£</span>
									<span class="display-3 text-success m-t-3" style="vertical-align: bottom;">0</span>
									<span style="vertical-align: bottom;">/month</span>
								</div>
							</td>
							<td class="col-xs-2 primary">
								<h5 class="m-t-1 text-white">Converting money</h5>
								<div class="m-t-5 p-t-3 row">
									<span class="text-info margin-auto">TransferWise fee</span>
								</div>
							</td>
							<td class="col-xs-2 primary">
								<h5 class="m-t-1 text-white">Withdraw to bank</h5>
								<div class="m-t-5 p-t-3 row">
									<span class="text-info margin-auto">Low, fixed fee</span>
								</div>
							</td>
						</tr>
						<tr class="hidden-xs hidden-sm hidden-md">
							<td class="middle-text p-l-1 p-r-1">No monthly account fees, unlike many traditional business bank accounts</td>
							<td class="middle-text p-l-1 p-r-1">Top-up your Borderless account for free via bank transfer</td>
							<td class="middle-text p-l-1 p-r-1">No receiving fees when you get paid internationally</td>
							<td class="middle-text p-l-1 p-r-1">No extra cost to get your local bank details</td>
							<td class="middle-text p-l-1 p-r-1"><a href="https://transferwise.com/help/article/2889489/borderless-account/how-much-does-it-cost-to-convert-between-currencies" target="_blank">Low and transparent fees</a>, no hidden costs</td>
							<td class="middle-text p-l-1 p-r-1">A small, fixed charge is passed on to you</td>
						</tr>
						<tr class="hidden-xs hidden-sm hidden-md">
							<td class="middle-text p-l-1 p-r-1">No set-up cost when you get started</td>
							<td class="middle-text p-l-1 p-r-1">No extra cost for adding new currencies</td>
							<td class="middle-text p-l-1 p-r-1">You receive the exact amount you expect</td>
							<td class="middle-text p-l-1 p-r-1">GBP, EUR, USD and AUD - with more coming</td>
							<td class="middle-text p-l-1 p-r-1">You always get the real exchange rate</td>
							<td class="middle-text p-l-1 p-r-1"><a href="https://transferwise.com/help/article/2888782/borderless-account/how-much-does-it-cost-to-send-or-withdraw-money-to-a-bank-account" target="_blank">See full list</a></td>
						</tr>
					</tbody>
				</table>
				<div class="m-t-5 p-t-5 m-b-5 p-b-5 full-width-div text-center">
				<a class="btn btn-default" href="https://transferwise.com/gb/borderless/pricing" target="_blank">More about pricing</a>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96 bg-gray">
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="image-full-width" src="https://lienzo.s3.amazonaws.com/images/Easy-online-setup@2x.png" />
			</div>
			<div class="col-md-5 offset-md-1">
				<div class="m-t-40">
					<h2 class="m-b-2">Easy online setup.</h2>
					<p>Get your free account quickly and easily online.</p>
					<p>Just complete your profile and upload your ID documents to verify your account for security. Then start sending and receiving money around the world.</p>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="pad-b-t-96 section quote bg-primary">
		<div class="container">
		<div class="row m-t-4 p-t-3 m-b-5 p-b-5">
			<div class="col-md-10 offset-md-1 text-center">
				<span class="m-t-5 text-success display-1">"</span>
				<h1 class="colored-dot m-t-0 white">I use it to pay my son’s tuition fees,<br/> my mortgage and spending abroad.</h1>
				<h4 class="author white m-t-1">-Gavin, father &amp; business-owner</h4>
				<a class="btn btn-inverse m-t-5" rel="noreferrer noopener" href="https://transferwise.com/borderless-account">Get your borderless account</a>
			</div>
		</div>
		</div>
	</div>
	<div class="pad-b-t-96 coverage">
		<div class="container">			
			<div class="row">
				<h2 class="colored-dot full-width-div m-b-7">Coverage.</h2>
				<h3 class="colored-dot m-b-2 full-width-div">Get local bank details.</h3>
				<p>These currencies come with your very own bank details. Anyone can use these to pay you just like they'd pay a local.</p>
			</div>
			<div class="row row-equal-height">
			<div class="col-md-3">
			<div class="tile">
			<div class="text-xs-left">
			<h5 class="m-b-2"><span class="currency-flag currency-flag-gbp m-r-1"></span><span>British Pound</span></h5>
			<p>Get your own Account Number and Sort Code.</p>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="tile">
			<div class="text-xs-left">
			<h5 class="m-b-2"><span class="currency-flag currency-flag-eur m-r-1"></span><span>Euro</span></h5>
			<p>Get your own SWIFT/BIC and IBAN details.</p>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="tile">
			<div class="text-xs-left">
			<h5 class="m-b-2"><span class="currency-flag currency-flag-usd m-r-1"></span><span>US Dollar</span></h5>
			<p>Get your own Routing (ABA) and Account Number.</p>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="tile">
			<div class="text-xs-left">
			<h5 class="m-b-2"><span class="currency-flag currency-flag-aud m-r-1"></span><span>Australian Dollar</span></h5>
			<p>Get your own BSB Code and Account Number.</p>
			</div>
			</div>
			</div>
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