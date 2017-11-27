<nav class="navbar navbar-default navbar-fixed-top user-navbar">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 col-sm-3 col-md-2">
				<div class="pull-left navbar-header">
					<a class="navbar-brand" href="/organ">
						<img alt="SaF CANTEEN" class="logo-img" src="/img/LOGO.png">
					</a>
				</div>
			</div>
			@if (Session::has('stfId', 'stfFirstname'))
			<div class="pull-right nav-header">
				<form action='/organ' method='post'>
					{{ csrf_field() }}
					<input type='hidden' name='custId' value='{{ Session::get("stfId") }}'>
					<span>{{ Session::get('stfFirstname') }} |</span>
					<a class="menu-link" href="/organ/logout">
						<span class="authen-btn">Logout</span>
					</a>
				</form>
			</div>
			@endif
		</diV>
	</div>
</nav>