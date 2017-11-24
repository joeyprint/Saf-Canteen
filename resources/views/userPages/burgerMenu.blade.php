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
      <div class="col-xs-12 col-sm-4 menu-box">
        <div class="row">
          <div class="col-xs-12">
            <img src="#" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <strong><p></p></strong>
            <p></p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 menu-box">
        <div class="row">
          <div class="col-xs-12">
            <img src="#" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <strong><p></p></strong>
            <p></p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 menu-box">
        <div class="row">
          <div class="col-xs-12">
            <img src="#" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <strong><p></p></strong>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection