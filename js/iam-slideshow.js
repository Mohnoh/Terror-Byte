var slideIndex = 1;
showSlides(slideIndex);

// Next/Previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slideshow-pic");
  var bullets = document.getElementsByClassName("slideshow-bullet");
  if(n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < bullets.length; i++) {
    bullets[i].className = bullets[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
  bullets[slideIndex-1].className += " active";
}
