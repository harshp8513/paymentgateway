@extends('master')
@section('page-title')
	<title>Home</title>
@endsection
@section('page-body')
	<div class="home-header">
		@include('header')
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-md-6">
					<h1 class='white pl-4'>Bye bye bank fees, hello world<span class="dot_color">.</span></h1>
					<p class='white mt-2 p-4'>Banks could charge you up to 5% in hidden costs when sending money to any bank account abroad. TransferWise is up to <a href="#" class='dark-a'>8x cheaper.</a> It's only fair.</p>
					<button class="btn btn-default mt-4 ml-4"><i class="fa fa-caret-right" aria-hidden="true"></i> How it works</button>
					
					<div class="row m-t-5 p-t-5 visible-lg visible-xl m-t-40">
					<div class="col-sm-6 m-t-5">
					<img src="https://daw291njkc3ao.cloudfront.net/conversion/landing-illustrations/security.svg" alt="Padlock" class="tw-landing__trust-image pull-left m-r-2">
					<h2 class="h4 m-t-1 white">
					FCA regulated
					</h2>
					<a class="dark-a" href="https://register.fca.org.uk/ShPo_FirmDetailsPage?id=001b000001EjC6SAAV" target="_blank" rel="noopener noreferrer">
					Learn more
					</a>
					</div>
					<div class="col-sm-6 m-t-5">
					<img src="https://daw291njkc3ao.cloudfront.net/conversion/landing-illustrations/customers.svg" alt="Message box" class="tw-landing__trust-image pull-left m-r-2 m-t-2 m-b-3">
					<h2 class="h4 m-t-1 white">
					Over 3 million customers
					</h2>
					<a class="dark-a" href="https://www.trustpilot.com/review/transferwise.com" target="_blank" rel="noopener noreferrer">
					Read on Trustpilot
					</a>
					</div>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="glow">
						<ul class="nav nav-tabs" role="tablist">
						  <li class="nav-item home-header-tab">
							<a class="nav-link active" href="#sendMoney" role="tab" data-toggle="tab">
								<div class="tab-header-img">
									<svg viewBox="0 0 24 24" id="send" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" style="fill: #fff;">
									<path d="M9 23a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm0-5a2 2 0 1 0 2 2 2 2 0 0 0-2-2zM18.89 6.18L17 1.38a.53.53 0 0 0-.27-.28.5.5 0 0 0-.38 0L11.5 3l.38.93 3.68-1.49-5.1 12 .92.39 5.1-12L18 6.55z"></path>
									</svg>
								</div>
								Send money
							</a>
						  </li>
						  <li class="nav-item home-header-tab">
							<a class="nav-link" href="#reciveMoney" role="tab" data-toggle="tab">
								<div class="tab-header-img">
									<svg viewBox="0 0 24 24" id="receive" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><title>receive</title><path d="M9 23a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm0-5a2 2 0 1 0 2 2 2 2 0 0 0-2-2zM11.79 13.75l5.1-12-.89-.38-5.1 12-1.51-3.69-.93.38 1.94 4.8a.51.51 0 0 0 .46.31.41.41 0 0 0 .19 0l4.8-1.94-.38-.92z"></path></svg>
								</div>
								Recive money
							</a>
						  </li>
						  <li class="nav-item home-header-tab">
							<a class="nav-link" href="#debitCard" role="tab" data-toggle="tab">
								<div class="tab-header-img">
									<svg viewBox="0 0 24 24" id="active-card" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><title>active-card</title><path d="M3 15h17v1H3zM8 13H3V9h5zm-4-1h3v-2H4zM20 10a2 2 0 1 1 2-2 2 2 0 0 1-2 2zm0-3a1 1 0 1 0 1 1 1 1 0 0 0-1-1z"></path><path d="M24 20H0V4h24v9.94l-.33.12a1 1 0 0 0 0 1.88l.33.12zM1 19h22v-2.27a2 2 0 0 1 0-3.46V5H1z"></path></svg>
								</div>
								Debit card
							</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						  <div role="tabpanel" class="tab-pane fade in active show" id="sendMoney">							  							  						 
							<div class="input-group flag_ddr form-group">
							  <label class="send-money-label">You send</label>
							  <input type="text" class="form-control send-money-text" value="999.96"/>
							  <div class="input-group-append">
								<select class="selectpicker" data-live-search="true">								
								  <optgroup label="Popular Currencies">
									<option><img src="image/us_flag.png" /> eur</option>
									<option><img src="image/us_flag.png" /><span>bre</span></option>										
									<option><img src="image/us_flag.png" /><span>ntj</span></option>
									<option><img src="image/us_flag.png" /><span>mkl</span></option>
									<option><img src="image/us_flag.png" /><span>qwe</span></option>
									<option><img src="image/us_flag.png" /><span>kjl</span></option>
								  </optgroup>
								  <optgroup label="All Currencies">
									<option><img src="image/us_flag.png" /><span>cvb</span></option>
									<option><img src="image/us_flag.png" /><span>nbm</span></option>
									<option><img src="image/us_flag.png" /><span>uil</span></option>
									<option><img src="image/us_flag.png" /><span>opi</span></option>
									<option><img src="image/us_flag.png" /><span>bbn</span></option>
								  </optgroup>
								</select>
							  </div>
							</div>
							
							<div class="form-group gbp_sec">
								<a class="link_gbp" href="#">Show free breakdown</a>
								<div class="gbp_line pb-0">
									<span>5.97 GBP</span>
									<select class="form-control">
									  <option>Low Cost Transfer</option>
									  <option>Low Cost Transfer</option>
									  <option>Low Cost Transfer</option>
									  <option>Low Cost Transfer</option>										  
									</select>
									<span>fee</span>
								</div>
								<div class="gbp_line pb-0">
									<p class="gbp_color">91.85961 </p>
									<a class="exchng_link" href="#">Exchange rate (Not guaranteed)</a>
								</div>
							</div>
							
							<div class="input-group flag_ddr form-group">
							  <label class="send-money-label">Recipient will get exactly</label>
							  <input type="text" class="form-control send-money-text" value="91,326.90"/>
							  <div class="input-group-append">
								<select class="selectpicker" data-live-search="true">								
								  <optgroup label="Popular Currencies">
									<option><img src="image/us_flag.png" /> eur</option>
									<option><img src="image/us_flag.png" /><span>bre</span></option>										
									<option><img src="image/us_flag.png" /><span>ntj</span></option>
									<option><img src="image/us_flag.png" /><span>mkl</span></option>
									<option><img src="image/us_flag.png" /><span>qwe</span></option>
									<option><img src="image/us_flag.png" /><span>kjl</span></option>
								  </optgroup>
								  <optgroup label="All Currencies">
									<option><img src="image/us_flag.png" /><span>cvb</span></option>
									<option><img src="image/us_flag.png" /><span>nbm</span></option>
									<option><img src="image/us_flag.png" /><span>uil</span></option>
									<option><img src="image/us_flag.png" /><span>opi</span></option>
									<option><img src="image/us_flag.png" /><span>bbn</span></option>
								  </optgroup>
								</select>
							  </div>
							</div>															
							
							<div class="form-group">
								<p class="txt_color_gbp">You could save up to: <b>38.03 GBP</b></p>
								<p class="txt_color_gbp">Should arrive <b>in 36 minutes</b></p>
							</div>
							
							<div class="form-group form-row">
								<div class="col-sm-6">
									<button class="btn btn-primary w-100">
										Compare price
									</button>
								</div>
								<div class="col-sm-6">
									<button class="btn btn-success w-100">								
										Get Started
									</button>
								</div>
							</div>							
							
						  </div>
						  
						  <div role="tabpanel" class="tab-pane fade" id="reciveMoney">
							<h3 class="white">Bye bye overseas bank accounts!</h3>
							<p class="white m-t-3">Get all these accounts in one with the TransferWise borderless account, and get paid from around the world with zero fees.</p>
							<img src="image/balances.svg" />
							
							<button class="btn btn-default m-t-3 btn-tab-in">
								<i class="fa fa-caret-right" aria-hidden="true"></i> Watch video
							</button>
							<button class="btn btn-success m-t-3 btn-tab-in">
								Get your account
							</button>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="debitCard">
							<h3 class="white">TransferWise debit Mastercard®</h3>
							<p class="white m-t-3">Spend around the world with low conversion fees and zero transaction fees.</p>
							<div class="text-center">
								<img src="image/card.png" style="width:50%;" />
							</div>
							<button class="btn btn-default m-t-3 btn-tab-in">
								Watch video
							</button>
							<button class="btn btn-success m-t-3 btn-tab-in">
								Get your account
							</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="chart" class="the-real-exchange-rate b-exchange-chart">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="b-exchange-chart__chartHeader chart-title" style="display: block;">
					As of 1 min ago,
					<span>1 </span>
					<span class="b-exchange-chart__chart-from">GBP</span>
					<i class="b-exchange-chart__rate-arrow"></i>
					<span class="b-exchange-chart__target-currency">
					<span class="b-exchange-chart__rate">1.1448</span>
					<span class="b-exchange-chart__chart-to">EUR</span>
					</span>
					</div>
					<img src="image/chart.png" class="img-fluid"/>
					<div class="small m-b-5 text-center" id="chartPeriodTitle">Past 30 days</div>
					<a href="https://transferwise.com/tools/exchange-rate-alerts?utm_source=transferwise&amp;utm_medium=website&amp;utm_campaign=rate_chart/#subscribe?fromCurrency=GBP&amp;toCurrency=EUR" class="btn btn-default btn-sm m-t-2 hidden-xs hidden-sm hidden-md js-event-rate-track" target="_blank">Track this exchange rate</a>
				</div>
				<div class="col-md-6">
					<h2 class="b-exchange-chart__real-rate">The real exchange rate</h2>
					<p><span class="b-exchange-chart__rate-message-main">Banks and other providers often add a markup to their exchange rate while advertising low fees, which means you could be paying huge hidden charges. TransferWise transparently displays its fee upfront and deducts it before conversion. No nasty surprises. TransferWise then uses the <a href="https://transferwise.com/gb/mid-market-rate" class="para_link" target="_blank">mid-market rate</a>, independently provided by Reuters without any markup.</span></p>
					<h5>See for yourself:</h5>
					<div class="m-t-2">
					<a href="http://www.xe.com/currencycharts/?from=GBP&amp;to=EUR&amp;view=1M" target="_blank" class="b-exchange-chart__compare-link-xe js-chart-compare-link" data-provider="XE"></a>
					<a href="https://www.google.co.uk/finance?q=GBPEUR" target="_blank" class="b-exchange-chart__compare-link-google js-chart-compare-link" data-provider="Google"></a>
					<a href="https://uk.finance.yahoo.com/q?s=GBPEUR=X" target="_blank" class="b-exchange-chart__compare-link-yahoo js-chart-compare-link" data-provider="Yahoo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="the-real-exchange-rate b-exchange-chart">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/circle_secure.png" class="img-fluid"/>
				</div>
				<div class="col-md-6">
					<h2 class="m-b-3 b-face-pile__title mt-100">You always know where your money is</h2>
					<p>You'll be updated via email at each stage of the transfer. You can also track your transfer with our award winning <a href="https://transferwise.com/money-transfer-app" class="para_link" target="_blank">mobile apps</a>  and website wherever you are.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row m-0">
			<div class="col-sm-12 p-0">
				<p class="video_txt">What our customers say</p>
				<div class="video_middle">						
					<button class="video_btn"> <i class="fa fa-caret-right" aria-hidden="true"></i> </button>
				</div>
				<video class="w-100 bg_video" autoplay loop>				
				  <source src="image/testimonials-video-silent.mp4" type="video/mp4">					  					  
				</video>
				<button class="close_btn"> <i class="fa fa-times" aria-hidden="true"></i> </button>
				<video class="w-100 play_video" autoplay loop>				
				  <source src="https://s3-eu-west-1.amazonaws.com/transferwise/testimonials-video.mp4" type="video/mp4">
				</video>
			</div>				
		</div>
		<div class="row m-0 bg_blue">
			<div class="col-sm-12 text-center">
				<p class="title_txt">5/5 star rating, reviews on TrustPilot</p>
				<p class="tag_txt">It’s your money, only perfect is good enough. Read all the reviews at 
				<a href="https://uk.trustpilot.com/review/transferwise.com" class="para_bg_link" target="_blank">Trustpilot.com</a></p>
			</div>
			<div class="col-sm-12">
			  <!-- Swiper -->
			  <div class="swiper-container">
				<div class="swiper-wrapper">
				  <div class="swiper-slide">
					<div class="rating_tab col-lg-8 col-lg-offset-2">
						<p class="swipe_title">HA, 10 minutes ago</p>
						<p class="swipe_txt">“Thanks this was easy and really needed when the cost of banking is high enough, your service is innovative and the flow on line is seamless. I did send an inquiry email that was never replied to so I had to call to get my answer initially. That did not detract from the value and ease of the service. Thanks!”</p>
						<ul class="swipe_foot">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
				  </div>
				  <div class="swiper-slide">
					<div class="rating_tab col-lg-8 col-lg-offset-2">
						<p class="swipe_title">Virawan Boustouller, 33 minutes ago</p>
						<p class="swipe_txt">“I don’t understand first time how to used, but now love ❤️❤️”</p>
						<ul class="swipe_foot">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
				  </div>
				  <div class="swiper-slide">
					<div class="rating_tab col-lg-8 col-lg-offset-2">
						<p class="swipe_title">Sasi Gottipati, an hour ago</p>
						<p class="swipe_txt">“Less nonsense. Good work team making it work exactly the way I prefer and straight forward.”</p>
						<ul class="swipe_foot">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
				  </div>					  
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
				</div>
				<div class="swiper-button-prev">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
				</div>
			  </div>
			</div>
			<div class="col-sm-12 pt-5 text-center">
				<p class="review_link">Reviews from:</p><a href="#" target="_blank"><img src="https://daw291njkc3ao.cloudfront.net/homepage/trustpilot.svg" class="img-fluid"/></a>
			</div>
		</div>			
	</div>
	
	<div class="container-fluid p-0 bg_gary" id="b-transfer-map-light">
		<div class="row m-0">		
			<div class="col-sm-12 tetx-center">
				<p class="trust_title">Trusted all over the World</p>
				<p class="trust_txt">People on every continent are choosing TransferWise.<br/> We are moving over £2 billion every month globally, saving people like you £50m in hidden charges.</p>
			</div>
			<div class="col-sm-12 tetx-center">
				<div class="bg_map">
					<div class="map_locator">
						<div class="map_dot">
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
						</div>
						<div class="main_map">
							<p class="map_title">$6000 Moments ago</p>
							<p class="map_tag">$112 saved</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<p class="trust_txt"> Now available in 59 countries covering 504 currency routes.<a href="#" class="para_link">See more about the routes we cover</a><br> We’re constantly adding new currencies bringing people everywhere a fairer choice.</p>
			</div>
			<div class="container pt-5">
				<div class="row">
					<div class="col-sm-4 text-center">
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
						<img src="https://daw291njkc3ao.cloudfront.net/homepage/press-wired.svg"  class="img-fluid"/>
						<p class="trust_txt">Smart tech and sharp thinking are disrupting high-street banks</p>
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
					</div>
					<div class="col-sm-4 text-center">
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
						<img src="https://daw291njkc3ao.cloudfront.net/homepage/press-financial-times.svg"  class="img-fluid"/>
						<p class="trust_txt">TransferWise is looking to use the internet to spark a digital revolution in current financial services.</p>
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
					</div>
					<div class="col-sm-4 text-center">
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
						<img src="https://daw291njkc3ao.cloudfront.net/homepage/press-the-economist.svg"  class="img-fluid"/>
						<p class="trust_txt">TransferWise takes a machete to the hefty fees that banks levy to send money across borders.</p>
						<p class="quote_color"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>			
		</div>		
	</div>
	<div class="container-fluid  p-0 bg_img_blue">
		<div class="row m-0">
			<div class="col-sm-12 mb-187 mt-187">
				<p class="bg_title">Awesome customer support</p>
				<p class="bg_txt">We don't do complicated automated systems. We have great people ready to help you whenever you need it.</p>
				<a href="#" class="more_link">Find out more</a>
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