$('.navbar-toggler').click(function() {
   $("i").toggleClass("fa-times");
   $("i").toggleClass("fa-bars");


});



$('.tuile>a').click(function(){
  console.log(this);
  let bite = $(this).data("slide-to");
  console.log(bite);
  $('.carousel').carousel(bite);
});
