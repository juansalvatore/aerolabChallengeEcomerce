@extends('templates.landing')

<!-- HEADER SECTION -->
@section('header')
  @extends('elements.header')
@endsection

<!-- ORDER BUTTONS SECTION -->
@section('orderButtons')
  <div class="buttonsContainer">
    <div class="divisorBar"></div>
    <span class="sortBy">Sort by:</span>
    <a id="mostRecent" class="mostRecent activeButton" href="#">
      <span>Most recent</span>
    </a>
    <a id="lowestPrice" class="lowestPrice" href="#">
      <span>Lowest price</span>
    </a>
    <a id="highestPrice" class="highestPrice" href="#">
      <span>Highest price</span>
    </a>
    <a href="#"><img src="arrow-right.svg" alt="arrow right"></a>
  </div>

@endsection

<!-- PRODUCTS SECTION -->
@section('products')
    @extends('elements.products', [
      'user' => $user,
      'products' => $products,
    ])
@endsection
