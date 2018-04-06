var slideIndex = 1;
slides(slideIndex);

function plusSlides(n) {
  slides(slideIndex += n);
}

function currentSlide(n) {
  slides(slideIndex = n);
}

function slides(n) {
  var i;
  var s = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  if (n > s.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = s.length}
  for (i = 0; i < s.length; i++) {
      s[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  s[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";