<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aerolab</title>
    <link rel="shortcut icon" type="image/png" href="aerolabFavicon.png" sizes="32x32"/>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/product/product-container-style.min.css">
  </head>
  <body>
    @yield('header')

    @yield('orderButtons')

    @yield('products')
    <?php use Illuminate\Support\Facades\Input; ?>
    <div class="footer">
      {!! $products->appends(Input::except('page'))->render() !!}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/cartButtonController.js"></script>
    <script src="js/triangleShapeController.js"></script>
  </body>
</html>
