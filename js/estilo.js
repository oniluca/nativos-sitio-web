(function($) {

  // Init Wow
  wow = new WOW({
    animateClass: 'animated',
    offset: 100
  });
  wow.init();

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  // Navigation scrolls
  $('.navbar-nav li a').bind('click', function(event) {
    $('.navbar-nav li').removeClass('active');
    $(this).closest('li').addClass('active');
    var $anchor = $(this);
    var nav = $($anchor.attr('href'));
    if (nav.length) {
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1500, 'easeInOutExpo');

      event.preventDefault();
    }
  });


  //jQuery to collapse the navbar on scroll
  $(window).scroll(function() {
    if ($(".navbar-default").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");

    }

  });

})(jQuery);


  const button =document.getElementById('button');
  const nav = document.getElementById('nav');

  button.addEventListener('click', function(){

     nav.classList.toggle('navbar-media');    
  });




$(document).ready(function(){ 

   $('#modalNoticia').on('show.bs.modal', function (event) {
      
      var foto =$(event.relatedTarget).data('foto')
      var titulo =$(event.relatedTarget).data('titulo')
      var descripcion =$(event.relatedTarget).data('descripcion')

      $(this).find('.modal-title').text(titulo)
      $(this).find('.modal-header img').attr('src',foto)
      $(this).find('.modal-body p').text(descripcion) 
    })
  });