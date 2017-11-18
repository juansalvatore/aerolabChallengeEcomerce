<div class="productsDisplayBox">
  <?php $id = 0 ?>

  <div class="productContainer">
    <!-- When user can buy product -->
    @if(!($user['points'] < $products[$id]['cost']))
    <div class="blueCircle"><?php echo file_get_contents("BlueIcon.svg"); ?></div>
      <div class="blueSection">
        <div class="textAndIconContainer">
          <span class="price">{{ $products[$id]['cost'] }}</span><img class="goldIcon" src="GoldIcon.svg">
        </div>
        <a href="#"><div class="redeemButton"><span>Redeem now</span></div></a>
      </div>
    @else <!-- When user can't buy product -->
      <div class="missingToPrice">
        <span>You need {{ $products[$id]['cost'] - $user['points'] }}</span><img class="goldIconMissingPrice" src="GoldIcon.svg">
      </div>
    @endif
    <div class="imgContainer">
      <img src="{{ $products[$id]['img']['hdUrl'] }}" alt="{{ $products[$id]['name'] }}"><br>
    </div>
    <div class="textContainer">
      <span class="category">{{ $products[$id]['category'] }}</span>
      <br>
      <span class="name">{{ $products[$id]['name'] }}</span>
    </div>
  </div>

  <?php $id = 10 ?>

  <div class="productContainer">
    <!-- When user can buy product -->
    @if(!($user['points'] < $products[$id]['cost']))
    <div class="blueCircle"><?php echo file_get_contents("BlueIcon.svg"); ?></div>
      <div class="blueSection">
        <div class="textAndIconContainer">
          <span class="price">{{ $products[$id]['cost'] }}</span><img class="goldIcon" src="GoldIcon.svg">
        </div>
        <a href="#"><div class="redeemButton"><span>Redeem now</span></div></a>
      </div>
    @else <!-- When user can't buy product -->
      <div class="missingToPrice">
        <span>You need {{ $products[$id]['cost'] - $user['points'] }}</span><img class="goldIconMissingPrice" src="GoldIcon.svg">
      </div>
    @endif
    <div class="imgContainer">
      <img src="{{ $products[$id]['img']['hdUrl'] }}" alt="{{ $products[$id]['name'] }}"><br>
    </div>
    <div class="textContainer">
      <span class="category">{{ $products[$id]['category'] }}</span>
      <br>
      <span class="name">{{ $products[$id]['name'] }}</span>
    </div>
  </div>
</div>
