@extends('templates.landing')

@section('header')
  <div class="header">
    <img src="aerolab-logo.svg" alt="aerolab">
    <div class="userInfo">
      <span class="userName">{{ $user['name'] }}</span>
      <div class="pointAmount">
        <span>{{ $user['points'] }}</span><img class="goldIconUserInfo" src="GoldIcon.svg">
      </div>
    </div>
  </div>

@endsection

@section('products')
  @extends('elements.products', [
    'user' => $user,
    'products' => $products,
  ])
@endsection
