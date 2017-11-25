@extends('layouts.user')

@section('title')
  Burger
@endsection

@section('custom_head')
  <link rel="stylesheet" href="/css/userStyle/menu.css">
@endsection

@section('content')
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="jumbotron">
						<div class="row">
							<div class="col-xs-12">
								<h1>หัวข้อ</h1>
								<p>Contents ...</p>
								<button class="btn btn-primary btn-lg pull-right">ใส่ตระกร้า</button>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="jumbotron">
						<div class="row">
							<div class="col-xs-12">
								<h1>หัวข้อ</h1>
								<p>Contents ...</p>
								<button class="btn btn-primary btn-lg pull-right">ใส่ตระกร้า</button>	
							</div>
						</div>
					</div>				
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="jumbotron">
						<div class="row">
							<div class="col-xs-12">
								<h1>หัวข้อ</h1>
								<p>Contents ...</p>
								<button class="btn btn-primary btn-lg pull-right">ใส่ตระกร้า</button>
							</div>
						</div>
					</div>				
				</div>
			</div>
	</div>
@endsection