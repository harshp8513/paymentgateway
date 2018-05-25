@extends('master')
@section('page-title')
	<title>Register</title>
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
						<h2 class="login-h2">Welcome to money without borders.</h2>
						<span class="m-t-2">
							<span class="">Already signed up?</span>
							<a href="{{url('login')}}">Login</a>
						</span>
						<div class="login-form-div">
							<form class="login-form">
								<div class="text-left">
									<label class="check-container">Personal
									  <input type="radio" checked="checked" name="radio">
									  <span class="checkmark"></span>
									</label>
									<label class="check-container">Business
									  <input type="radio" name="radio">
									  <span class="checkmark"></span>
									</label>
								</div>
								<input type="text" class="form-control1 email" placeholder="Your email address"/>
								<input type="password" class="form-control1 password" placeholder="Your password"/>
								<button type="submit" class="btn btn-success m-t-2 btn-block text-xs-center">
									<span class="fa fa-lock pull-left"></span>
									<span>Sign up</span>
								</button>
								<div class="m-t-2">
									Or, continue with <a class="forgot-pass-a" href="#">Google</a> or <a class="forgot-pass-a" href="#">Facebook</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection