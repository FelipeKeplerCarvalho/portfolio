
var swiper = new Swiper(".tm-slide", {
  direction: "vertical",
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,
  loop: true,
  mousewheel: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var teste = new Swiper(".company-slider", {
  slidesPerView: 5,
  spaceBetween: 30,
  speed: 100,
  mousewheel: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    // Quando a largura da tela for >= 640px
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    576: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    // Quando a largura da tela for >= 1024px
    991: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
  pagination: {
    el: ".swiper-pagination2",
    clickable: true,
  },
  on: {
    
    init: function () {
      var activeIndex = this.activeIndex;
      var $inicial = this.slides[activeIndex + 2];

      $inicial.classList.add('ativo');


    },
    slideChange: function () {

      //remover
      this.slides.forEach(slide => {
        slide.classList.remove('ativo');
      });

      // Este evento é disparado sempre que o índice do slide muda
      var activeIndex = this.activeIndex;

      // Seleciona o slide atual usando o índice
      var currentSlide = this.slides[activeIndex + 2];

      // Adiciona a borda ao slide atual
      currentSlide.classList.add('ativo');
    },
  },
});

//Fancy box

document.addEventListener('DOMContentLoaded', function () {
  Fancybox.bind('[data-fancybox="video-gallery"]', { // Passa o seletor e as opções corretamente
    Toolbar: true,
    YouTube: {
      autoplay: false, // Configuração específica para vídeos do YouTube
    },
  });
});



jQuery(document).ready(function ($) {
  $('#news-form').on('submit', function (e) {
    e.preventDefault();

    let form = $(this);
    let formData = form.serialize(); // Serializa os dados do formulário, serve para transformar em uma URL QUERY STRING, formato esperado pelo servidor


    // PRIMEIRO MOMENTO : ajax vai !!!DEFINIR!!! quais dados seram enviados e de que forma e envia para os servidor 

    $.ajax({ //$.ajax: função do jQuery que permite fazer requisições assíncronas ao servidor
      type: "POST",
      url: form.attr('action'), //  URL para onde a requisição será enviada.
      data: formData, // contem os DADOS que seram enviados


      beforeSend: function () {
        form.find("button[type=submit]").text("Sending...");
      },
      // Resposta do servidor
      success: function (response) {
        if (response.success) {
          $('#form-response').html(response.data.message);
          $('#form-response').removeClass('is-error');
          $('#form-response').addClass('is-sucess');
          $('#input-email').css('outline', 'none');
          form[0].reset();
        } else {
          $('#form-response').html(response.data.message);
          $('#form-response').removeClass('is-sucess');
          $('#form-response').addClass('is-error');
          $('#input-email').css('outline', 'solid 2px #DF6951');
        }
        form.find("button[type=submit]").text("Subscribe");
      },
      error: function () {
        $('#form-response').html('<p>Erro ao enviar o formulário. Tente novamente mais tarde.</p>');
      }
    });
  });
});