/*jslint browser: true*/

(function ($) {
  "use strict";

  var introautosize = function () {

  //Auto width & height #intro divs
    $('#intro').height($(window).height());
    $('#intro .back').height($(window).height());
    $('#intro .front').height($(window).height());
    $('#proyectos').height($(window).height());
    $('#proyectos .slides').height($(window).height());
    $('.imagen.about').height($(window).height());

    // Auto margin-top #intro .content
    var mtopcontent = ($('#intro').height() / 2) - ($('#intro .front .content').outerHeight() / 2);
    $('#intro .front .content').css('margin-top', mtopcontent);

  }, stickymenu = function () {

    if ($(document).scrollTop() > 20) {
      $('menu#main').addClass('fixed');
    } else {
      $('menu#main').removeClass('fixed');
    }

  };

  $(document).ready(introautosize);
  $(window).resize(introautosize);
  $(window).scroll(stickymenu);

  // scrollto
  $('.scroll-to').click(function () {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') || location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });

  // quitamos contenedor video

  // $('#intro .scroll-to').click(function () {
  //   $('#intro').delay(1000).fadeOut(300, function () {
  //     $(this).remove();
  //   });
  // });

  // expandimos/contraemeos lista de proyectos

  $('.menu-proyectos a').click(function (e) {
e.preventDefault();
    $('.sub-nav').toggleClass('collapsed');
    $('i', this).toggleClass('fa-angle-down fa-angle-up');
  });


  $('.proyect-desc').looper({
    interval: false
  });

  $('#proyectos').on('show', function (e) {

    var prevIndex = e.relatedIndex - 1, nextIndex = e.relatedIndex + 1;

    if (nextIndex === 9) {
      nextIndex = 0;
    }

    var titPrev = $('.proyects > li').eq(prevIndex).text(), titNext = $('.proyects > li').eq(nextIndex).text();

    $('.proyects > li').removeClass('active');

    $('.proyects > li').eq(e.relatedIndex).addClass('active');
    $('.proyect-desc').looper('to', e.relatedIndex + 1);
    $('.navi-prev span').html(titPrev);
    $('.navi-next span').html(titNext);
  });

  skrollr.init();


}(jQuery));