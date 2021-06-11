$.get( "http://192.168.0.109:8080/components/headernone.html").done(function( data ) {
   $('body').prepend( data );
 });
 $.get( "http://192.168.0.109:8080/components/footernone.html").done(function( data ) {
   $('main').after( data );
 });
 $.get( "http://192.168.0.109:8080/components/modalnone.html").done(function( data ) {
   $('footer').after( data );
 });
$(function() {
    let header = $('.header');
    let hederHeight = header.height(); 
     
    $(window).scroll(function() {
      if($(this).scrollTop() > 1) {
       header.addClass('header_fixed');
       $('body').css({
          'paddingTop': hederHeight+'px' 
       });
      } 
      else {
       header.removeClass('header_fixed');
       $('body').css({
        'paddingTop': 0 
       })
      }
    });
   });

function openNav() {
    document.getElementById("nav-modal").style.width = "100%";
  }
  function closeNav() {
  document.getElementById("nav-modal").style.width = "0";
  }
/*scroll button*/
$(document).ready(function(){
 
  $(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
  $('.scrollup').fadeIn();
  } else {
  $('.scrollup').fadeOut();
  }
  });
   
  $('.scrollup').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
  });
   
  });
  var warning = document.getElementById("modal_warning");
  var btnclock = document.querySelector(".btn_warning");
  var closewarn = document.getElementsByClassName("close_warning")[0];
 
  btnclock.onclick = function () {
     warning.style.display = "block";
  }
 
  closewarn.onclick = function () {
     warning.style.display = "none";
  }
 

