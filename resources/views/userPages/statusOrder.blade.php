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
      <div class="col-xs-12 col-md-6">
        <div class="jumbotron order-card">
          <div class="row">
            <div class="col-xs-12">
              <strong><p class="order-title">สถานะการส่ง Order #123456</p></strong>
            </div>
            <div class="col-xs-12">
              <p class="order-status">Unpaid</p>
            </div>
          </div>
        </div>				
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="jumbotron order-card">
          <div class="row">
            <div class="col-xs-12">
              <strong><p class="order-title">สถานะการส่ง Order #123456</p></strong>
            </div>
            <div class="col-xs-12">
              <p class="order-status">Unpaid</p>
            </div>
          </div>
        </div>				
      </div>
    </div>
  </div>
@endsection