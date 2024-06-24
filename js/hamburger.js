
$hamburgerContainer.on("click", function(event){
    $burger.toggleClass("is-active");
    $(this).toggleClass("burger-clicked");
    $sideBar.toggleClass("sidebar-show");
    $bodyAll.toggleClass("allmove");
    $(".clickableoverlay").show();
    $("body").css("overflow", "hidden");
});
  
$(".clickableoverlay").on("click", function(){
    $(this).hide();
    $burger.toggleClass("is-active");
    $sideBar.toggleClass("sidebar-show");
    $bodyAll.toggleClass("allmove");
    $("body").css("overflow", "auto");
});