<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php $id = 3; ?>
    {{ $products[$id]['name'] }}
    <br>
    {{ $products[$id]['cost'] }}
    <br>
    {{ $products[$id]['category'] }}
    <br>
    <img src="{{ $products[$id]['img']['url'] }}" alt="{{ $products[$id]['name'] }}"><br>
    <img src="{{ $products[$id]['img']['hdUrl'] }}" alt="{{ $products[$id]['name'] }}">

  </body>
</html>
