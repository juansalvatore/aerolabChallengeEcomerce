$(".productContainer").hover(function(){
    // on mouse in
    $(".blueCircle").css("background-color", "white");
    $("#carritoColor").css("fill", "#0AD4FA");
    }, function(){
    // on mouse leaving
    $(".blueCircle").css("background-color", "#0AD4FA");
    $("#carritoColor").css("fill", "white");
});
