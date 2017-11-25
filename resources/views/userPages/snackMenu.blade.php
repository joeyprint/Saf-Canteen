@extends('layouts.user')

@section('title')
	Snack
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/menu.css">
	

@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="jumbotron">
					<div class="row" >
                       <img src="/img/snackMenu/frenchfries.png" alt="">
                        
						<h1>หัวข้อ</h1>
						<p>Contents ...</p>
                        
						<p>
							<a class="btn btn-primary btn-lg">ใส่ตระกร้า</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="jumbotron">
					<div class="container">
                        <img src="/img/snackMenu/Hash Browns.png" alt="">
						<h1>หัวข้อ</h1>
						<p>Contents ...</p>
						<p>
							<a class="btn btn-primary btn-lg">ใส่ตระกร้า</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="jumbotron">
					<div class="container">
                        <p>
                        <img src="/img/snackMenu/frenchfries.png" alt="">
                        </p>
						<h1>หัวข้อ</h1>
						<p>Contents ...</p>
						<p>
							<a class="btn btn-primary btn-lg">ใส่ตระกร้า</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection