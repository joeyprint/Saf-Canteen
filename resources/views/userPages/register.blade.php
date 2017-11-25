@extends('layouts.user')

@section('title')
  Register
@endsection

@section('custom_head')
  <link rel="stylesheet" href="/css/userStyle/regis.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-offset-3 col-md-6 regis-block">
        <div class="row">
          <div class="col-xs-12">
            <form action="" method="post" autocomplete="off">
              <div class="text-center">Register</div>
              <div class="form-group">
                <p>ชื่อ</p>
                <input type="text" class="form-control" name="cfname" placeholder="สมชาย" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <p>นามสกุล</p>
                <input type="text" class="form-control" name="clname" placeholder="ใจเย็น" autocomplete="off">
              </div>
              <div class="form-group">
                <p>เบอร์โทรศัพท์</p>
                <input type="tel" class="form-control" name="ctel" placeholder="08xxxxxxxx" autocomplete="off">
              </div>
              <div class="form-group">
                <p>อีเมล์</p>
                <input type="email" class="form-control" name="cemail" placeholder="example@email.com" autocomplete="off">
              </div>
              <div class="form-group">
                <p>รหัสผ่าน</p>
                <input type="password" class="form-control" name="cpass" placeholder="password" autocomplete="off">
              </div>
            </form>
          </div>
          <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
              <div class="text-center regis-btn">ดำเนินการต่อ</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection