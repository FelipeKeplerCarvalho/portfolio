
let swiper;

document.addEventListener("DOMContentLoaded", function () {
  swiper = new Swiper(".home-swiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next', // Seleciona o botão "próximo"
      prevEl: '.swiper-button-prev', // Seleciona o botão "anterior"
    },
    mousewheel: false,
    simulateTouch: false, // Desabilita interações por toque (incluindo clique e arrastar)
    allowTouchMove: false, // Desabilita o movimento de arrastar no swiper
  })
});


document.querySelectorAll('.item-menu').forEach(item => {
  item.addEventListener('click', function (event) {
    event.preventDefault();

    var index = event.currentTarget.getAttribute("data-slide");
    index = parseInt(index);

    swiper.slideTo(index);

  })
});


// Overflow Slide

