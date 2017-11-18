@extends('templates.landing')

@section('header')
  <div class="header">
    <img src="aerolab-logo.svg" alt="aerolab">
  </div>
@endsection

@section('products')
  @extends('elements.products', [
    'user' => $user,
    'products' => $products,
  ])
@endsection
