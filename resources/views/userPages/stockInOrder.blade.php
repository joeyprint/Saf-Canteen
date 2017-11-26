@extends('layouts.user')

@section('title')
  New Order
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/userStyle/stockOrder.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>ถุงสินค้า</h2>
      </div>
    </div>
    <div class="row">
      @foreach($orderlist as $order)
        <div class="col-xs-12">
          <div class="jumbotron order-card">
            <div class="row">
              <div class="col-xs-12 col-sm-2 text-center">
                <img class="img-order" src="/img/Menu/{{ $order->menuPic }}" alt="">
              </div>
              {{--  mobile  --}}
              <div class="row visible-xs">
                <div class="col-xs-offset-3 col-xs-2 text-center">
                  <div class="quantity-block">{{ $order->quantity }}</div>  
                </div>
                <div class="col-xs-offset-1 col-xs-3 text-center">
                  <p class="price-xs-text">{{ $order->menuPrice }} บาท</p>
                </div>
                <diV class="col-xs-12 text-center">
                  <strong><p class="order-title">{{ $order->menuName }}</p></strong>
                </div>
                <div class="col-xs-12 text-center">
                  <button type="submit" class="btn btn-danger">ลบสินค้า</button>
                </div>
              </div>

              <diV class="col-xs-12 hidden-xs col-sm-5">
                <strong><p class="order-title">{{ $order->menuName }}</p></strong>
              </div>
              <div class="col-sm-1 hidden-xs text-center">
                <p class="quantity-block">{{ $order->quantity }}</p>                  
              </diV>
              <div class="col-sm-2 hidden-xs text-right">
                <p class="price-sm-text">{{ $order->menuPrice }} บาท</p>
              </div>
              <button type="submit" class="btn btn-danger pull-right del-btn hidden-xs">ลบสินค้า</button>
            </div>
          </div>				
        </div>
      @endforeach
      <div class="col-xs-6">
        <a href="/burger">
          <div class="jumbotron continue-btn">
            <div class="row">
              <div class="col-xs-12 text-center">
                <strong><p class="text-btn-conti">เลือกสินค้าเพิ่ม</p></strong>
              </div>
            </div>
          </div>
        </a>				
      </div>
      <div class="col-xs-6">
        <a href="/addOrder/sendAt">
          <div class="jumbotron continue-btn">
            <div class="row">
              <div class="col-xs-12 text-center">
                <strong><p class="text-btn-conti">ดำเนินการต่อ</p></strong>
              </div>
            </div>
          </div>				
        </a>
      </div>
    </div>
  </div>
@endsection