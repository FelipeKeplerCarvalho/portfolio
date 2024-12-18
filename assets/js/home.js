
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

    if (modalmenu.classList.contains('active')) {
        botao.classList.remove('active'); // Sincroniza o botão com o estado do menu
        modalmenu.classList.remove('active'); 
    }

  })
});


// Scrollbar

// Custom scroll
document.addEventListener("DOMContentLoaded", function () {
  // Seleciona o elemento onde você deseja aplicar a barra de rolagem
  const container = document.querySelector('.teste');

  // Inicializa o Perfect Scrollbar
  document.querySelectorAll('.teste').forEach(item => {

    new PerfectScrollbar(item, {
      wheelSpeed: 1,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

  })
});


// Menu mobile

let botao = document.querySelector('.menu-icon');
let modalmenu = document.querySelector('.menu-mobile-itens');

// Clique no botão para abrir/fechar o menu
botao.addEventListener('click', function (event) {
  event.stopPropagation(); // Evita que o clique seja capturado pelo document
  botao.classList.toggle('active');
  modalmenu.classList.toggle('active');
});

// Clique fora do modal para fechá-lo
document.addEventListener('click', function (event) {
  if (modalmenu.classList.contains('active')) {
    if (!modalmenu.contains(event.target)) {
      modalmenu.classList.remove('active');
      botao.classList.remove('active'); // Sincroniza o botão com o estado do menu
    }
  }
});