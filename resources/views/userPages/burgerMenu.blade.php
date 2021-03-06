@extends('layouts.user')

@section('title')
	Berger
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/menu.css">
	

@endsection

@section('content')
	<div class="container">
		<div class="row">
			@foreach($burgerMenu as $menu)
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="jumbotron menu-box">
						<div class="row">
							<div class="col-xs-12">
								<img class="image-menu" src="/img/Menu/{{ $menu->menuPic }}" alt="">
								<h4 class="menu-title">{{ $menu->menuName }}</h4>
								<p class="menu-text">{{ $menu->menuDetail }}</p>
								<button class="btn btn-primary btn-lg pull-right">ใส่ตระกร้า</button>
							</div>
						</div>
					</div>				
				</div>
			@endforeach
		</div>
	</div>
@endsection