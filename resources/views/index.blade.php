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

    <?php $id = 15; ?>

    <!-- <br>
    {{ $products[$id]['cost'] }}
    <br> -->

    <!-- <img src="{{ $products[$id]['img']['hdUrl'] }}" alt="{{ $products[$id]['name'] }}"> -->

    <div class="productContainer">
      <div class="blueSection">
        <div class="textAndIconContainer">
          <span class="price">{{ $products[$id]['cost'] }}</span><img class="goldIcon" src="GoldIcon.svg">
        </div>
        <a href="#"><div class="redeemButton"><span>Redeem now</span></div></a>
      </div>
      <div class="imgContainer">
        <img src="{{ $products[$id]['img']['hdUrl'] }}" alt="{{ $products[$id]['name'] }}"><br>
      </div>
      <div class="textContainer">
        <span class="category">{{ $products[$id]['category'] }}</span>
        <br>
        <span class="name">{{ $products[$id]['name'] }}</span>
      </div>
    </div>


  </body>
</html>
