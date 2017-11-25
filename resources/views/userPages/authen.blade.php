@extends('layouts.user') @section('title') Log in @endsection @section('custom_head')
<link rel="stylesheet" href="/css/userStyle/authen.css"> @endsection @section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-offset-4 col-md-4 login-block">
			<div class="row">
				<div class="col-xs-12 col-md-offset-2 col-md-8">
					<form action="" method="post" autocomplete="off">
						<div class="text-center">SaF CANTEEN</div>
						<div class="inner-addon left-addon">
							<i class="fa fa-user form-control-feedback"></i>
							<input type="text" class="form-control" name="uid" placeholder="username" autofocus autocomplete="off">
						</div>
						<div class="inner-addon left-addon">
							<i class="fa fa-lock form-control-feedback"></i>
							<input type="password" class="form-control" name="password" placeholder="password" autocomplete="off">
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-2 col-md-8">
					<div class="text-center login-btn">เข้าสู่ระบบ</div>
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