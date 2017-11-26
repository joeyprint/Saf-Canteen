@extends('layouts.user')

@section('title')
  Status Order
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/statusOrder.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="title-page">สถานะการส่ง</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="jumbotron add-order-card">
          <div class="row">
            <div class="col-xs-12">
              <strong><p class="add-order-title">เพิ่มรายการสั่งซื้อ</p></strong>
            </div>
          </div>
        </div>				
      </div>
      @foreach($status as $orderStatus)
        <div class="col-xs-12 col-md-6">
          <div class="jumbotron order-card">
            <div class="row">
              <div class="col-xs-12">
                <strong><p class="order-title">สถานะการส่ง Order #{{ $orderStatus->orderId }}</p></strong>
              </div>
              <div class="col-xs-12">
                <p class="order-status">{{ $orderStatus->paymentStatus }}</p>
              </div>
            </div>
          </div>				
        </div>
      @endforeach
    </div>
  </div>
@endsection