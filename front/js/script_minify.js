$(function(){var n=window.location.href;$("ul li a").each(function(){}),$("ul li a").each(function(){n==this.href&&($("#indexed").removeClass("active_menu_navbar"),$(this).closest("li").addClass("active_menu_navbar"))})}),$(document).ready(function(){$(".close_nav").click(function(){$("#menu-toggle").prop("checked",!1)})}),$(window).on("load",function(){"use strict";$(".loading-overlay .spinner").fadeOut(1e3,function(){$(this).parent().fadeOut(1e3,function(){$("body").css("overflow","auto"),$(this).remove()})})});