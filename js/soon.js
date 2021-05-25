/*first modal*/

var modal1 = document.getElementById("my_modal1");
 var btn1 = document.getElementById("btn_modal_window1");
 var span1 = document.getElementsByClassName("close_modal_window1")[0];

 btn1.onclick = function () {
    modal1.style.display = "block";
 }

 span1.onclick = function () {
    modal1.style.display = "none";
 }

 /*window.onclick = function (event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}*/

/*second modal*/
var modal2 = document.getElementById("my_modal2");
 var btn2 = document.getElementById("btn_modal_window2");
 var span2 = document.getElementsByClassName("close_modal_window2")[0];

 btn2.onclick = function () {
    modal2.style.display = "block";
 }

 span2.onclick = function () {
    modal2.style.display = "none";
 }
 /*third modal*/
 var modal3 = document.getElementById("my_modal3");
 var btn3 = document.getElementById("btn_modal_window3");
 var span3 = document.getElementsByClassName("close_modal_window3")[0];

 btn3.onclick = function () {
    modal3.style.display = "block";
 }

 span3.onclick = function () {
    modal3.style.display = "none";
 }

 
 