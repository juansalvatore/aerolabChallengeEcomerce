<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="/css/product/product-container-style.min.css">
  </head>
  <body>

    <?php $id = 8; ?>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/cartButtonController.js"></script>
  </body>
</html>
