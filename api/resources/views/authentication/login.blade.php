@extends('master')
@section('page-title')
	<title>Login</title>
@endsection
@section('page-body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<img class='image-full-width' src="image/roof.jpg"/>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<a href="{{url('/')}}" class="pull-right close-login">X</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 offset-md-3 text-center">
						<img class="login-logo m-b-7" src="image/logo.svg"/>
						<h2 class="login-h2">Welcome back.</h2>
						<span class="m-t-2 small-welcome">
							<span class="">New to TransferWise?</span>
							<a href="{{url('register')}}">Sign up</a>
						</span>
						<div class="login-form-div">
							<form class="login-form">
								<input type="text" class="form-control1 email" placeholder="Your email address"/>
								<input type="password" class="form-control1 password" placeholder="Your password"/>
								
								<button type="submit" class="btn btn-primary m-t-2 btn-block text-xs-center">
									<span class="fa fa-lock pull-left"></span>
									<span>Log in</span>
								</button>
								<div class="text-right m-t-2">
									<a class="forgot-pass-a" href="#">Forgot password?</a>
								</div>								
							</form>
							<button class="btn m-t-2 btn-block text-xs-center btn-social btn-facebook">Connect with Facebook</button>
							<button class="btn m-t-2 btn-block text-xs-center btn-social btn-google">Connect with Google</button>
						</div>
						<hr/>
						<div class="text-left">
							<input type="checkbox"/> Remember this device
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection