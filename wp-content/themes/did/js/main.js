/*jslint browser: true*/
/*global $, jQuery*/

(function ($) {
  "use strict";

  var introautosize = function () {

  //Auto width & height #intro divs
    $('#intro').height($(window).height());
    $('#intro .back').height($(window).height());
    $('#intro .front').height($(window).height());
    $('#proyectos').height($(window).height());
    $('#proyectos .slides').height($(window).height());

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

  $('.proyect-desc').looper({
    interval: false
  });

  $('#proyectos').on('show', function (e) {
    $('.proyects > li').removeClass('active');
    $('.proyects > li').eq(e.relatedIndex).addClass('active');
    $('.proyect-desc').looper('to', e.relatedIndex + 1);
  });

}(jQuery));