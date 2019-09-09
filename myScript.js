let vh = window.innerHeight * 0.01;

document.documentElement.style.setProperty('--vh', `${vh}px`);

$(function() {
  $(".rslides").responsiveSlides();
  auto: true,
});