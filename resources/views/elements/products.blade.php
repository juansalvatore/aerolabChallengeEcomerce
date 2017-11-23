<?php use Illuminate\Support\Facades\Input; ?>
<div class="productsCenter">
  <div class="productsDisplayBox">
    @foreach ($products as $product)


      <div id="{{ $product['_id'] }}" class="productContainer">
        <!-- When user can buy product -->
        @if(!($user['points'] < $product['cost']))
        <div class="blueCircle"><?php echo file_get_contents("BlueIcon.svg"); ?></div>
          <div class="blueSection">
            <div class="textAndIconContainer">
              <span class="price">{{ $product['cost'] }}</span><img class="goldIcon" src="GoldIcon.svg">
            </div>
            <a href="#"><div class="redeemButton"><span>Redeem now</span></div></a>
          </div>
        @else <!-- When user can't buy product -->
          <div class="missingToPrice">
            <span>You need {{ $product['cost'] - $user['points'] }}</span><img class="goldIconMissingPrice" src="GoldIcon.svg">
          </div>
        @endif
        <div class="imgContainer">
          <img src="{{ $product['img']['hdUrl'] }}" alt="{{ $product['name'] }}"><br>
        </div>
        <div class="textContainer">
          <span class="category">{{ $product['category'] }}</span>
          <br>
          <span class="name">{{ $product['name'] }}</span>
        </div>
      </div>
    @endforeach
  </div>
</div>
