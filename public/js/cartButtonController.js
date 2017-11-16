$(".productContainer").hover(function(){
    $(".blueCircle").css("background-color", "white");
    $("BlueIcon").find("path,polygon,circle").attr("fill", "#0AD4FA");
    }, function(){
    $(".blueCircle").css("background-color", "#0AD4FA");
    $("#carrito").find("path,polygon,circle").attr("fill", "white");

});
