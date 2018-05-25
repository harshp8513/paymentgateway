@extends('master')
@section('page-title')
	<title>Pricing</title>
@endsection
@section('page-body')
	<div class="pricing-header">
		<div class="container">
			<!-- Static navbar -->
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<a class="navbar-brand white"  href="{{url('/')}}">PaymentGateway</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse navbar_main" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								English (UK)<i class="fa fa-chevron-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu ddr_menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="#">Deutsch</a></li>
								<li><a class="dropdown-item" href="#chart">English (UK)</a></li>
								<li><a class="dropdown-item" href="#b-transfer-map-light">English (US)</a></li>
								<li><a class="dropdown-item" href="#">Español</a></li>
								<li><a class="dropdown-item" href="#">Français</a></li>
								<li><a class="dropdown-item" href="#">Magyar</a></li>
								<li><a class="dropdown-item" href="#">Polski</a></li>
								<li><a class="dropdown-item" href="#">Português</a></li>
								<li><a class="dropdown-item" href="#">Română</a></li>
								<li><a class="dropdown-item" href="#">Русский</a></li>
								<li><a class="dropdown-item" href="#">日本語</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Business</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Borderless account</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Help</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/register')}}">Sign up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/login')}}">Log in</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container pt-5 pb-5">
			<div class="row text-center">
			<div class="col-md-8 offset-md-2 p-b-96">
				<h1 class="white full-width-div m-t-45">TransferWise fees.</h1>
				<p class="TransferWise-fees">Whether you’re sending money, or spending on your TransferWise card, you’ll find everything you need to know about our fees on this page.</p>
				<div class="full-width-div m-t-45"></div>
			</div>
			</div>
		</div>
	</div>
	<div class="gray-bg">
	<div class="container">
		<div class="row pricing-page-links">
			<div class="col-md-4 offset-md-2 pricing-page-links">
				<a class="tw-header-navigation__send-money thumbnail m-b-0">
					<img class="image-full-width" src="image/sending-money.png" class="hidden-xs" role="presentation">
					<div class="panel-body text-sm-center">
						<h4 class="p-b-1"><span>Sending money</span></h4>
						<div>
							<span>See fees for spending on your card and managing the currencies in your account.</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pricing-page-links">
				<a class="tw-header-navigation__send-money thumbnail m-b-0">
					<img class="image-full-width" src="image/using-your-card-and-balances.png" class="hidden-xs" role="presentation">
					<div class="panel-body text-sm-center">
						<h4 class="p-b-1"><span>Using your card and balances</span></h4>
						<div>
							<span>Use our pricing calculator to work out how much your transfer will cost.</span>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="full-width-div text-center m-b-3">Send money fees explained.</h2>
				<p class="text-sm-center send-money-p"><span>You’ll always know our fees upfront. But here’s a handy little tool that’ll help you see how we calculate them.</span></p>
				
				<div class="send-money-dropdown">
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
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<h3 class="font-size-28">You are sending</h3>
					</div>
					<div class="col-md-6 text-right">
						<h3 class="font-size-28">£ 1,000.00 GBP</h3>
					</div>
					
				</div>			
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<!--Accordion wrapper-->
					 <div class="accordion accordion-2 m-t-1" id="accordionEx7" role="tablist" aria-multiselectable="true">

						<!-- Accordion card -->
						<div class="card">

							<!-- Card header -->
							<div class="card-header rgba-stylish-strong z-depth-1" role="tab" id="heading1">
								<a class="accordian-a" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
									
									<div class="circle circle-sm circle-responsive"><i class="fa fa-credit-card m-l-15"></i></div>
										<p><span class='title-p'>Available payment methods</span><br/><span class="small-p">See available payment methods for this route</span></p>
								</a>
							</div>

							<!-- Card body -->
							<div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx7">
								<div class="card-body rgba-grey-light white-text">
									<p>When you pay by debit or credit card, most banks charge an additional fee. These processing fees vary depending on the kind of card you use and where it was issued.</p>
									<ul class="m-t-1">
										<li><a href="#">Bank transfer</a></li>
										<li><a href="#">Debit card</a></li>
										<li><a href="#">Credit card</a></li>
										<li><a href="#">Swift</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">

							<!-- Card header -->
							<div class="card-header rgba-stylish-strong z-depth-1" role="tab" id="heading2">
								<a class="accordian-a collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
									<div class="circle circle-sm circle-responsive"><i class="fa fa-flag m-l-15"></i></div>
									<p><span class="pull-right right-price">- £ 5.97 <span class="tw-pricing-small tw-pricing-small--muted currency-panel__title">GBP</span></span><span class='title-p'>TransferWise fee</span><br/><span class="small-p">0.55% of the amount that's converted</span></p>
									
								</a>
							</div>

							<!-- Card body -->
							<div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx7">
								<div class="card-body rgba-grey-light white-text">
									<p>How much we take depends on how much money you send. The TransferWise fee is always included and taken from the conversion amount.</p>
									<ul class="fee-list p-a-2">
										<li class="fee-list__item active p-y-2 p-x-3">
											<div class="row">
												<div class="col-xs-12 col-lg-6">
													<span>Up to £ 100,000.00 GBP</span>
												</div>
												<div class="col-xs-12 col-lg-6">
													<span class="pull-lg-right text-lg-right"><span>0.55% Fee</span> + £ 0.50 GBP</span>
												</div>
											</div>
										</li>
										<li class="fee-list__item  p-y-2 p-x-3">
											<div class="row">
												<div class="col-xs-12 col-lg-6">
													<span>Amount over £ 100,000.00 GBP</span>
												</div>
												<div class="col-xs-12 col-lg-6">
													<span class="pull-lg-right text-lg-right">
														<span>0.55% Fee on initial £ 100,000.00 GBP, 0.4% on anything over</span>
														+ £ 0.50 GBP
													</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Accordion card -->
						
						<!-- Accordion card -->
						<div class="card">

							<!-- Card header -->
							<div class="card-header rgba-stylish-strong z-depth-1" role="tab" id="heading3">
								<a class="accordian-a collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
									<div class="circle circle-sm circle-responsive"><i class="fa fa-line-chart m-l-15"></i></div>
									<p><span class="pull-right right-price-black">₹ 90,729.35 <span class="right-small">INR</span></span><span class='title-p'>Amount that's converted</span><br/><span class="small-p">Exchange rate: 91.27426</span></p>
								</a>
							</div>

							<!-- Card body -->
							<div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx7">
								<div class="card-body rgba-grey-light white-text">
									<p>TransferWise always uses the real exchange rate (sometimes called the ‘mid-market’ or the ‘interbank’ rate) — it’s the one you see on Google. Most providers add their own mark up to the rate, so you have to pay more for your currency.</p>
									See for yourself:<br/><br/>
									<a href="http://www.xe.com/currencycharts/?from=GBP&amp;to=EUR&amp;view=1M" target="_blank" class="b-exchange-chart__compare-link-xe js-chart-compare-link" data-provider="XE"></a>
									<a href="https://www.google.co.uk/finance?q=GBPEUR" target="_blank" class="b-exchange-chart__compare-link-google js-chart-compare-link" data-provider="Google"></a>
								</div>
							</div>
						</div>
						<!-- Accordion card -->
					</div>
					<!--Accordion wrapper-->
					<div class="row pad-40">
						<div class="col-md-6">
							<h5 class="fnt-size-20">Recipient gets</h5>
							<p class="m-t-1">Total fees £ 5.97 GBP (already included)</p>
						</div>
						<div class="col-md-6 text-right">
							<h3 class="fnt-size-20">₹ 90,729.35 INR</h3>
						</div>
						<div class="full-width-div text-right">
						<button class="btn btn-success">Make my transfer</button>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
	<div class="pad-b-t-96 bg-dark-blue">
		<div class="container">
			<div class="row text-xs-center">
				<h1 class="tw-pricing-learn-more__title m-b-4 m-t-4 full-width-div text-center white m-t-b-4"><span>Want to learn more?</span></h1>
					<div class="full-width-div text-center">
					<a class="tw-pricing-learn-more__cta btn btn-primary" href="#"><span>Check out our FAQ</span></a>
					</div>
			</div>
		</div>
	</div>
	<div id="chart" class="the-real-exchange-rate b-exchange-chart pad-b-t-96" style="background:white;">
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
	<div class="pad-b-t-96 bg-dark-blue">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center box-3-section">
					<div class="box-3-section-icon">
						<i class="fa fa-line-chart white"></i>
					</div>
					<div class="box-3-section-title m-t-1">
						<h2 class="m-t-2 m-b-1 white">Cheaper</h2>
					</div>
					<p class="white box-3-section-p">Banks and other providers could charge you up to 5% in hidden costs when sending money abroad.</p>
				</div>
				<div class="col-md-4 text-center">
					<div class="box-3-section-icon">
						<i class="fa fa-flag white"></i>
					</div>
					<div class="box-3-section-title m-t-1">
						<h2 class="m-t-2 m-b-1 white">Faster</h2>
					</div>
					<p class="white box-3-section-p">90% of the transfers from the UK to Europe are completed within 1 business day.</p>
				</div>
				<div class="col-md-4 text-center">
					<div class="box-3-section-icon">
						<i class="fa fa-user white"></i>
					</div>
					<div class="box-3-section-title m-t-1">
						<h2 class="m-t-2 m-b-1 white">Trusted</h2>
					</div>
					<p class="white box-3-section-p">We are moving over £2 billion every month globally, saving people like you £50m in hidden charges.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96">
		<div class="container">
			<div class="row">
				<h2 class="m-b-4 full-width-div text-center">See why it's cheaper</h2>
				<div class="full-width-div text-center">
					<img id="pricing-play-youtube" src="image/play-button.png" />
				</div>
				<div class="col-md-8 offset-md-2 youtube-div d-none">
					<iframe id='play-youtube-video' style="height:411px;width:100%;" class="hiw-video-overlay__iframe" src="https://www.youtube.com/embed/MLKKzRvOsLQ?controls=0&enablejsapi=1&html5=1&rel=0&showinfo=0&wmode=transparent" wmode="transparent" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-b-t-96 bg-dark-blue">
		<div class="container">
			<div class="row text-xs-center">
				<h1 class="tw-pricing-learn-more__title m-t-4 full-width-div text-center white"><span>Open a free account in minutes.</span></h1>
					<p class="full-width-div text-center white">And join over 1 million people saving money with TransferWise.</p>
					<div class="full-width-div text-center">
					<a class="tw-pricing-learn-more__cta btn btn-success" href="#"><span>Get started</span></a>
					</div>
			</div>
		</div>
	</div>
	@include('footer')							
	<script>
		$("#pricing-play-youtube").click(function(){
			$('.youtube-div').removeClass('d-none');
			$(this).hide();
			$('#play-youtube-video').attr('src',$('#play-youtube-video').attr('src')+"&autoplay=1");
		});
		// Navbar_dropdown
		 /*$(".nav-item").hover(function () {					 
			$(this).find('.ddr_menu').toggleClass("show");					 
			$(this).toggleClass("show");
		 });*/
	</script>
@endsection