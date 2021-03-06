@extends('layouts.user')

@section('title')
	Log in
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/authen.css">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-offset-4 col-md-4 login-block">
				<div class="row">
					<div class="col-xs-12 col-md-offset-2 col-md-8">
						<form action="/authen" method="post" autocomplete="off">
							{{ csrf_field() }}
							<div class="text-center">SaF CANTEEN</div>
							<div class="inner-addon">
								<input type="text" class="form-control" name="uemail" placeholder="example@email.com" autofocus autocomplete="off">
							</div>
							<div class="inner-addon">
								<input type="password" class="form-control" name="upassword" placeholder="password" autocomplete="off">
							</div>
						<button type='submit' class="text-center login-btn">เข้าสู่ระบบ</button>
						</form>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-md-offset-2 col-md-8">
						<div class="text-center register-btn">สมัครสมาชิก</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection