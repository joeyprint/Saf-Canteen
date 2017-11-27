@extends('layouts.org')

@section('title')
  Authentication
@endsection

@section('custom_head')
	<link rel="stylesheet" href="/css/orgStyle/index.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          @foreach($order as $orderMenu)
          <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6">
            <div class="jumbotron order-block">
              <h2>Order Number #{{ $orderMenu->orderId }}</h2>
              <p>
                Status Order : {{ $orderMenu->paymentStatus }}
              <br>
                {{ $orderMenu->orderSendAddress }}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection