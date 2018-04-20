$(document).ready(function(){
  var numItems = $('.newest').length; /*Mencari jumlah gambar*/
  console.log(numItems);
  dragElement(document.getElementById(("slide")));
  var width = document.getElementById("test").offsetWidth;/*Besar container test*/
  console.log(width);
  console.log(document.getElementById("slide").offsetWidth);/*Besar container slide*/
  var lebar = 165*numItems; /*Menghitung besar container slider*/
  console.log(lebar);
  $("#slide").width(lebar).height(150);/*Meng-set lebar dan tinggi slider*/
  $(".overlaytext").hover(function(){
    $(this).css('background-color','#a0a0a0');
    $(this).prev('img.category').css('filter','blur(1px)');
    $(this).prev('img.category').css('box-shadow','5px 5px 20px 5px #888888');
  },function(){
    $(this).css('background-color','white');
    $(this).prev('img.category').css('filter','blur(0px)');
    $(this).prev('img.category').css('box-shadow','0px 0px 0px 0px #888888');
  });
  $(".overlaytext").click(function(){

  });
  function dragElement(elmnt) { /*Function ketika mouse di tekan*/
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    elmnt.onmousedown = dragMouseDown;
    return false;
    function dragMouseDown(e) {//ketika ditekan, mencari posisi pointer. return false agar event default men-drag gambar tidak di eksekusi.
      e = e || window.event;
      pos3 = e.clientX;
      document.onmouseup = closeDragElement;
      document.onmousemove = elementDrag;
      return false;
    }
    function elementDrag(e) {
      e = e || window.event;
      pos1 = pos3 - e.clientX;//menghitung posisi
      pos3 = e.clientX;
      var offsetRight = document.body.offsetWidth - (document.getElementById("slide").offsetLeft + document.getElementById("slide").offsetWidth);//kalkulasi jarak slider dengan layar bagian kanan
      console.log(offsetRight);
      console.log(document.body.offsetWidth);
      if(offsetRight>0){//apabila slider sudah habis, mencegah drag
        document.getElementById("slide").style.left = document.getElementById("slide").offsetLeft+offsetRight;
        return false;
      }else if(document.getElementById("slide").offsetLeft>0){
        document.getElementById("slide").style.left = 0;
        return false;
      }else {//apabila tidak habis, slider bergerak
        width = width+1;
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
      }
    }
    function closeDragElement() {//berhenti drag
      document.onmouseup = null;
      document.onmousemove = null;
    }
  }
  
});
  