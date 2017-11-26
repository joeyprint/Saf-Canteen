@extends('layouts.user')

@section('title')
  Addreess to Send Order
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/showAddrSend.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>เลือกสถานที่จัดส่ง</h2>
      </div>
    </div>
      <div class="col-xs-12">
        <div class="jumbotron add-addr-card">
          <div class="row">
            <div class="col-xs-12">
              <p class="add-addr-title">+ เพิ่มที่อยู่</p>
            </div>
          </div>
        </div>				
      </div>
      @foreach($showAddr as $show)
        <a href="/status">
          <div class="col-xs-12">
            <div class="jumbotron order-card">
              <div class="row">
                <div class="col-xs-12">
                  <p class="order-title">{{ $show->orderSendAddress }}</p>
                </div>
              </div>
            </div>				
          </div>
        </a>
      @endforeach
  </div>
@endsection