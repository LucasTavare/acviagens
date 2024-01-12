var swiper = new Swiper(".swiper", {
    grabCursor: true, 
    speed: 500, 
    effect: "slide",
    Loop: true,
    mousewheel: {
    invert: false, sensitivity: 1,
    },
  });
    swiper.enable();
  
$('.escolhas div').click(function(){

  const id = $(this).attr('id')
  
  const container = 'container'+id

  $('.containers div').css('display','none')

  $(`#${container}`).css('display','block')

  // alert(container2)
})