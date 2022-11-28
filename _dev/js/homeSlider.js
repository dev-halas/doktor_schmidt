const slider = document.querySelector(".homeSlider");

if (slider !== null) {
  const slides = document.querySelectorAll(".homeSlide");
  const slideNavs = document.querySelectorAll(".homeSlider--navButton");
  let sliderCounter = document.querySelector(".homeSlider--counter");
  //const nextButton = document.querySelector('.homeSlider--next');
  //const prevButton = document.querySelector('.homeSlider--prev');
  const numberOfSlides = slides.length;

  let currentSlide = 0;

  slides[0].classList.add("activeSlide");
  slideNavs[0].classList.add("activeNav");

  //next button logic
  function nextSlide() {
    slides.forEach((slide) => {
      slide.classList.remove("activeSlide");
    });

    slideNavs.forEach((slideNav) => {
      slideNav.classList.remove("activeNav");
    });

    currentSlide++;

    if (currentSlide > numberOfSlides - 1) {
      currentSlide = 0;
    }

    let slideCounterVal = currentSlide + 1;
    sliderCounter.innerHTML = "slider " + slideCounterVal;

    slides[currentSlide].classList.add("activeSlide");
    slideNavs[currentSlide].classList.add("activeNav");
  }

  //nextButton.addEventListener('click', nextSlide);

  //prev button logic
  function prevSlide() {
    slides.forEach((slide) => {
      slide.classList.remove("activeSlide");
    });

    slideNavs.forEach((slideNav) => {
      slideNav.classList.remove("activeNav");
    });

    currentSlide--;

    if (currentSlide < 0) {
      currentSlide = numberOfSlides - 1;
    }
    slides[currentSlide].classList.add("activeSlide");
    slideNavs[currentSlide].classList.add("activeNav");
  }

  //prevButton.addEventListener('click', prevSlide)

  //slider autoPlay

  let playSlider;

  let slideRepeater = () => {
    playSlider = setInterval(nextSlide, 7000);
  };
  slideRepeater();

  slideNavs.forEach((slideNav, slideIndex) => {
    slideNav.addEventListener("click", () => {
      clearInterval(playSlider);
      slideRepeater();

      currentSlide = slideIndex;

      slides.forEach((slide) => {
        slide.classList.remove("activeSlide");
      });

      slideNavs.forEach((slideNavIndex) => {
        slideNavIndex.classList.remove("activeNav");
      });

      let slideCounterVal = slideIndex + 1;
      sliderCounter.innerHTML = "slider " + slideCounterVal;

      slides[slideIndex].classList.add("activeSlide");
      slideNavs[slideIndex].classList.add("activeNav");
    });
  });

  //calc negative margin 2 element of 2 slide
  window.addEventListener("DOMContentLoaded", () => {
    const secondSlideLayerTwo = document.querySelector(
      ".secondSlide--layerTwo"
    );
    const elHeight = document.querySelector(
      ".secondSlide--layerOne"
    ).offsetHeight;
    console.log(elHeight);
    secondSlideLayerTwo.style.marginTop = -elHeight / 10 + "px";
  });
}
