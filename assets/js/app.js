<<<<<<< Updated upstream
$('button').click(function() {
   $("i").toggleClass("fa-times");
   $("i").toggleClass("fa-bars");


});
=======
$('.navbar-toggler').click(function() {
   $(".navbar-toggler>i").toggleClass("fa-times");
   $(".navbar-toggler>i").toggleClass("fa-bars");


});




$('.tuile>a, .wrapper a').click(function(){
  console.log(this);
  let bite = $(this).data("slide-to");
  console.log(bite);
  $('.carousel').carousel(bite);
});




>>>>>>> Stashed changes
