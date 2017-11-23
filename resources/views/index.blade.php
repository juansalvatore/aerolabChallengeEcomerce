@extends('templates.landing')

<!-- HEADER SECTION -->
@section('header')
  @extends('elements.header')
@endsection

<!-- ORDER BUTTONS SECTION -->
@section('orderButtons')
  <div class="buttonsContainer">
    <div class="buttonsExtension">
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
      <!-- add if to check amount of pages -->
      <!-- PAGES = (nr of articles / nr of articles shown per page) average up -->

      @if(isset($_GET['page']))
        @if($_GET['page'] > 1)
          <a class="leftArrow" href="/?page={{
            $_GET['page'] - 1
          }}"><img src="arrow-left.svg" alt="arrow left"></a>
        @endif
        <a class="rightArrow" href="/?page={{
          $_GET['page'] + 1
        }}"><img src="arrow-right.svg" alt="arrow right"></a>
      @else
        <a class="rightArrow" href="/?page=2"><img src="arrow-right.svg" alt="arrow right"></a>
      @endif
      <div class="buttonBottonDivisior"></div>
    </div>
  </div>

@endsection

<!-- PRODUCTS SECTION -->
@section('products')
    @extends('elements.products', [
      'user' => $user,
      'products' => $products,
    ])
@endsection
