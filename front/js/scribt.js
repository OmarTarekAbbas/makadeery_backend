/* Start Active Menu Navbar */
$(function () {
  var url = window.location.href;

  $("ul li a").each(function () {});
  $("ul li a").each(function () {
    if (url == (this.href)) {
      $("#indexed").removeClass("active_menu_navbar");
      $(this).closest("li").addClass("active_menu_navbar");
    }
  });
});
/* End Active Menu Navbar */

/* Start Active Menu Tabs */
$(function () {
  var url = window.location.href;

  $(".navbar_tabs a").each(function () {});
  $(".navbar_tabs a").each(function () {
    if (url == (this.href)) {
      $("#indexedt").removeClass("active_menu_tabs");
      $(this).closest(".nav-item").addClass("active_menu_tabs");
    }
  });
});
/* End Active Menu Tabs */

$(document).ready(function () {
  $(".close_nav").click(function () {
    $('#menu-toggle').prop('checked', false);
  });
});

//loading screen
$(window).on('load', function () {
  'use strict';
  $('.loading-overlay .spinner').fadeOut(1000, function () {
    $(this).parent().fadeOut(1000, function () {
      $('body').css('overflow', 'auto');
      $(this).remove();
    });
  });
});