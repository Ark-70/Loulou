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


let n=$('.p-4>a').length;
for(var i=1 ; i<=n ; i++){
  $('.tuile:nth-child('+i+')>a,.p-4>a:nth-child('+i+')').data("slide-to", i-1);
  console.log($('.tuile:nth-child('+i+')>a').data("slide-to"));
}






