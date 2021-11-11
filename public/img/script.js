
// menu circle a l'accueil
$('.btn-circle').click(function () {
  $(this).toggleClass('active');
  return $('.all-circle').toggleClass('open');
});

// back to top
$(".toTop").click(function () {
  $("html, body").animate({ scrollTop: 0 });
});



// afficher les boutons des carouselles si on est au début ou a la fin de celui ci
// $(document).ready(function () {
//   check_btn_carousel();
// });

// $('#carousel-story').on('slid.bs.carousel', check_btn_carousel);
// function check_btn_carousel() {
//   var $this = $('#carousel-story');
//   $this.children('.carousel-control-prev').toggle(
//       !$this.find('.carousel-inner .carousel-item:first-child').hasClass('active')
//   );
//   $this.children('.carousel-control-next').toggle(
//       !$this.find('.carousel-inner .carousel-item:last-child' ).hasClass('active')
//   );
// }

var nb_carousel_item = $(".carousel-item").length;
console.log(nb_carousel_item);



for(let i = 0; i < nb_carousel_item; i++){
  console.log('i = ', i)
  if(i === 0) {
    $("<button type=\"button\" data-bs-target=\"#carousel-story\" data-bs-slide-to=\""+(i)+"\" class=\"active\" aria-current=\"true\" aria-label=\"Slide "+(i+1)+"\"></button>").appendTo(".carousel-indicators");
  }else{
    $("<button type=\"button\" data-bs-target=\"#carousel-story\" data-bs-slide-to=\""+(i)+"\" aria-current=\"true\" aria-label=\"Slide "+(i+1)+"\"></button>").appendTo(".carousel-indicators");
  }
}

 



