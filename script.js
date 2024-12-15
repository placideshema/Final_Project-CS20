// Set the initial slide index to 1 (first slide)
let slideIndex = 1;

// When the page loads, show the first slide
document.addEventListener('DOMContentLoaded', function() {
  showSlides(slideIndex);
});

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Remove active class from all dots
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Display the current slide
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// our story
function myFunction() {
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
    var readMoreText = document.getElementById("readMore");

    if (moreText.style.display === "block") {
        moreText.style.display = "none";
        btnText.innerHTML = "Read more";
        readMoreText.style.display = "block";
    } else {
        moreText.style.display = "block";
        btnText.innerHTML = "Read less";
        readMoreText.style.display = "none";
    }
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});