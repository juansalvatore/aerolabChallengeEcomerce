
$(".productContainer").hover(function(){
    // on mouse in
    $(".blueCircle", this).css("background-color", "white");
    $("#carritoColor", this).css("fill", "#0AD4FA");
    }, function(){
    // on mouse leaving
    $(".blueCircle", this).css("background-color", "#0AD4FA");
    $("#carritoColor", this).css("fill", "white");
});

// order buttons logic
$("#mostRecent").click(function() {
  if(!$(this).hasClass("activeButton")) {
    $(this).toggleClass("activeButton");
    $("#lowestPrice").removeClass("activeButton");
    $("#highestPrice").removeClass("activeButton");
  }
});

$("#lowestPrice").click(function() {
  if(!$(this).hasClass("activeButton")) {
    $(this).toggleClass("activeButton");
    $("#mostRecent").removeClass("activeButton");
    $("#highestPrice").removeClass("activeButton");
  }
});

$("#highestPrice").click(function() {
  if(!$(this).hasClass("activeButton")) {
    $(this).toggleClass("activeButton");
    $("#mostRecent").removeClass("activeButton");
    $("#lowestPrice").removeClass("activeButton");
  }
});
