<style>
.mySlides {display:none}
.left, .right, .badge {cursor:pointer}
.badge {height:13px;width:13px;padding:0}
</style>
<div class="content display-container" style="max-width:500px">
  
  <img class="mySlides " src="img/c2.jpg" style="width:100%">
  <img class="mySlides " src="img/c3.jpg" style="width:100%">
  <div class=" center container section large text-white display-bottommiddle" style="width:100%">
    <div class="left hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="right hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="badge demo border transparent hover-black" onclick="currentDiv(1)"></span>
    <span class="badge demo border transparent hover-black" onclick="currentDiv(2)"></span>
    <span class="badge demo border transparent hover-black" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
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

