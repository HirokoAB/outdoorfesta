$(window).on("load", function() {

  $(".owl-carousel").owlCarousel({

  	items:2,
    loop:true,
    margin:10,
    responsive: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,


  })

   $('#content').infinitescroll({
   	itemsMobile : [479,1],
   })


});

console.log('ここがスライダーのjs')