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

  var btn1= document.getElementById('btn1');
  var btn2 = document.getElementById('btn2');
  var btn3 = document.getElementById('btn3');
  var btn4 = document.getElementById('btn4');
  

  btn1.onclick = function()
  {
    head_link.addClass('link1');
  }
  btn2.onclick = function()
  {
    head_link.addClass('link2');
  }
  btn3.onclick = function()
  {
    head_link.addClass('link3');
  }
  btn4.onclick = function()
  {
    head_link.addClass('link4');
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

const film1 = document.querySelector('#film1')
console.log(film1)

const film1Content = film1.textContent
