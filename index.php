<!DOCTYPE html>
<html>
    <title>Sports Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
    .mySlides {display:none}
    .left, .right, .badge {cursor:pointer}
    .badge {height:13px;width:13px;padding:0}
    .badge1 {height:23px;width:23px;padding:0}
</style>
<body>
<div class="container dark-grey ">
<? include "loginModal.php";?>
<? include "daftar.php";?>
    <div class="top" >
         <? include "nav.php";?>
    </div>
         <div class="display-container " >
            
            <div class="container display-container" style="max-width:1400px">
                <img class="mySlides" src="img/head.jpg" style="width:100%">
                <img class="mySlides" src="img/head2.jpg" style="width:100%">
                <img class="mySlides" src="img/head3.jpg" style="width:100%">
                <div class="center half section large text-white display-bottommiddle margin-bottom" style="width:30%">
                    <div class="left hover-text-khaki " onclick="plusDivs(-1)">&#10094;</div>
                    <div class="right hover-text-khaki " onclick="plusDivs(1)">&#10095;</div>
                    <span class="badge demo border transparent hover-white" onclick="currentDiv(1)"></span>
                    <span class="badge demo border transparent hover-white" onclick="currentDiv(2)"></span>
                    <span class="badge demo border transparent hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>
            
            <div class="display-right container text-white margin-right">
                <h1>Sports Center</h1>
                <p>Sports Center adalah website alat olahraga terlengkap dan <br> termurah di indonesia dengan produk berkualitas.</p>
                <a href="#kategori" class="button margin-right teal hover-red"><i class="fa fa-shopping-cart large"></i>  Belanja Sekarang</a>
            </div>
        </div>
    <? include "kategori.php";?>
        <div class="container dark-grey" style="padding: 0px;" >
            <div class="threequarter grey display-none"style="padding: 0px;" >
                <div class="half grey" >
                    <div class="half white" >
                        
                    </div>
                    <div class="half grey padding" >
                        
                    </div>
                </div>
                <div class="half grey" >
                    <div class="half white" >
                        
                    </div>
                    <div class="half grey padding" >
                        
                    </div>
                </div>
            </div>
            <div class="quarter black padding" >
                <div class="half padding" style="margin-top: 8%">
                    <img src="img/user.jpg" style="width:100%;border-radius: 50%">
                </div>
                <div class="half " style="margin-top: 8%">
                    <h5>Follow us !</h5>
                    <p><b>Alamat :</b><br/><i style="font-size: 15px">Kanoman, Jl.Janti YOGYAKARTA</i></p>
                </div>
                <div class="bar  xlarge margin-left">
                    <a href="instagram.com/iqbal_calvter" class="bar-item button black hover-red"><i class="fa fa-instagram"></i></a>
                    <a href="facebook.com/calvterid" class="bar-item button black hover-red"><i class="fa fa-facebook-official"></i></a>
                    <a href="github.com/calvterid" class="bar-item button  black hover-red"><i class="fa fa-github"></i></a>
                    <a href="github.com/calvterid" class="bar-item button  black hover-red"><i class="fa fa-twitter"></i></a>
                    <a href="github.com/calvterid" class="bar-item button  black hover-red"><i class="fa fa-whatsapp"></i></a>

                </div>
            </div>
        </div>
    <? include "footer.php";?>
</div>
<script>
function c_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function c_close() {
    document.getElementById("mySidebar").style.display = "none";
}
function Acc1() {
    var x = document.getElementById("ac1");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
        x.previousElementSibling.className += " teal";
    } else { 
        x.className = x.className.replace(" show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" teal", "");
    }
}
function Acc2() {
    var x = document.getElementById("ac2");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
        x.previousElementSibling.className += " teal";
    } else { 
        x.className = x.className.replace(" show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" teal", "");
    }
}
function Acc3() {
    var x = document.getElementById("ac3");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
        x.previousElementSibling.className += " teal";
    } else { 
        x.className = x.className.replace(" show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" teal", "");
    }
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " white";
}
</script>

</body>
</html>

