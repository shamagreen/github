<div id="header"><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/dining.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/hall.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/food.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/rest.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span>  
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script></div>