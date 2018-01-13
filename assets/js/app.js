$(window).load(function() {
    $('#editer').modal('show');
    $('#editer').show();
});

$('.navbar-toggler').click(function() {

   $(".navbar-toggler>i").toggleClass("fa-times");
   $(".navbar-toggler>i").toggleClass("fa-bars");

});




$('.tuile>a, .wrapper a').click(function(){

  console.log(this);
  $('.carousel').carousel($(this).data("slide-to"));
});




// Oui c'est indigeste, mais c'est pour faire correspondre les trois endroits de la page où les ID devraient commencer à 1 au lieu de 0 pour être en correspondance avec la bdd
let n=$('.p-4>a').length;
for(var i=1 ; i<=n ; i++){
  $('.tuile:nth-child('+i+')>a,.p-4>a:nth-child('+i+')').data("slide-to", i-1);
  // console.log($('.tuile:nth-child('+i+')>a').data("slide-to"));
};







