
$(".productContainer").hover(function(){
    // on mouse in
    $(".blueCircle", this).css("background-color", "white");
    $("#carritoColor", this).css("fill", "#0AD4FA");
    }, function(){
    // on mouse leaving
    $(".blueCircle", this).css("background-color", "#0AD4FA");
    $("#carritoColor", this).css("fill", "white");
});
