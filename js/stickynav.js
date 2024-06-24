$(window).on("scroll", function(){
    let scrollTop = $(this).scrollTop();
    // if(scrollTop > lastScrollTop) {
    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
      $headerAll.removeClass("sticky-header");
      $headerAll.removeClass("is-sticky");
    } else if(scrollTop <= scrollThreshold) {
      $headerAll.removeClass("sticky-header");
      $headerAll.removeClass("is-sticky");
    } else {
      $headerAll.addClass("sticky-header").slideDown(1000);
      $headerAll.addClass("is-sticky");
    }
    lastScrollTop = scrollTop;
});