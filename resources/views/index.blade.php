@extends('templates.landing')

@section('header')
  @extends('elements.header')
@endsection

@section('products')
    @extends('elements.products', [
      'user' => $user,
      'products' => $products,
    ])
@endsection
