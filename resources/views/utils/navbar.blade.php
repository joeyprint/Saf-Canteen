<nav class="navbar navbar-default navbar-fixed-top user-navbar">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 col-sm-3 col-md-2">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
						<img src="/img/LOGO.png" class="logo-img" alt="SaF CANTEEN">
					</a>
				</div>
				<button type="button" class="navbar-toggle collapsed toggle-btn" data-toggle="collapse" data-target="#menuNav" aria-expanded="false">
					<span class="sr-only">MenuNavi</span>
					<span class="icon-bar toggle"></span>
					<span class="icon-bar toggle"></span>
					<span class="icon-bar toggle"></span>
				</button>
			</div>
			<div class="col-sm-offset-5 col-sm-4 col-md-offset-5 col-md-5 hidden-xs authen-group">
				@if (!Session::has('userId', 'userFirstname'))
				<p>
					<a class="menu-link" href="/authen">
						<span class="authen-btn">เข้าสู่ระบบ</span>
					</a> หรือ
					<a class="menu-link" href="/authen/register">
						<span class="authen-btn">สมัครสมาชิก</span>
					</a>
				</p>
				@else
					<form action='/' method='post'>
						{{ csrf_field() }}
						<input type='hidden' name='custId' value='{{ Session::get("userId") }}' >
						<span>{{ Session::get('userFirstname') }} | </span>
						<a class="menu-link" href="/addOrder">
							<span>ตระกร้าสินค้า</span>
						</a>
						<span> | </span>
						<a class="menu-link" href="/status">
							<span>ตรวจสอบสถานะ</span>
						</a>
						<span> | </span>
						<a class="menu-link" href="/logout">
							<span class="authen-btn">Logout</span>
						</a>
					</form>
				@endif
			</div>
		</div>
		<div class="collapse navbar-collapse" id="menuNav">
			<ul class="nav navbar-nav">
				<li class="menu-button">
					<a class="menu-link" href="/burger">เบอร์เกอร์</a>
				</li>
				<li class="menu-button">
					<a class="menu-link" href="/chicken">ไก่ทอด</a>
				</li>
				<li class="menu-button">
					<a class="menu-link" href="/snack">เฟรนช์ฟรายส์</a>
				</li>
				<li class="menu-button">
					<a class="menu-link" href="/dessert">ของหวาน</a>
				</li>
			</ul>
			@if (!Session::has('userId', 'userFirstname'))
			<ul class="nav navbar-nav">
				<li class="visible-xs menu-button">
					<a class="menu-link" href="/authen">
						<span class="authen-btn">เข้าสู่ระบบ</span>
					</a>
				</li>
				<li class="visible-xs menu-button">
					<a class="menu-link" href="/authen/register">
						<span class="authen-btn">สมัครสมาชิก</span>
					</a>
				</li>
			</ul>
			@else
				<form class="visible-xs" action='/' method='post'>
					{{ csrf_field() }}
					<input type='hidden' name='custId' value='{{ Session::get("userId") }}' >
					<span>{{ Session::get('userFirstname') }} | </span>
					<a class="menu-link" href="/addOrder">
						<span>ตระกร้าสินค้า</span>
					</a>
					<span> | </span>
					<a class="menu-link" href="/status">
						<span>ตรวจสอบสถานะ</span>
					</a>	
					<span> | </span>
					<a class="menu-link" href="/logout">
						<span class="authen-btn">Logout</span>
					</a>
				</form>
			@endif
		</div>
	</div>
</nav>