const images = document.getElementById("images");
const carousel = images.querySelector(".carousel__content");
const image = carousel.querySelector(".carousel__item");
const imageWidth = image.offsetWidth;
const gap = 0;

const forward = document.getElementById("scroll-forward");
const back = document.getElementById("scroll-back");

let currentTransform = 0;
function scroll(dir) {
  if (dir === "forward") {
    currentTransform += imageWidth + gap;
  } else {
    currentTransform -= imageWidth + gap;
  }
  carousel.style.transform = `translateX(${currentTransform}px)`;
}

back.onclick = () => scroll("forward");
forward.onclick = () => scroll("back");
