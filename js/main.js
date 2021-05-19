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

  btn2.onclick = function()
  {
    head_link.addClass('link2');
  }
  btn3.onclick = function()
  {
    head_link.addClass('link3');
  }

  /*slider*/


