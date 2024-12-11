
(function ($) {
    $(document).ready(function () {
        // Quando a página rolar
        $(window).on('scroll', function () {
            var scrollPosition = $(window).scrollTop(); // Posição de rolagem da página

            // Definir que o conteúdo desaparece após rolar 200px para baixo
            if (scrollPosition > 40) {
                $('.header-content').fadeOut(); // Desaparece suavemente
            } else {
                $('.header-content').fadeIn(); // Aparece novamente
            }
        });
    });
})(jQuery);

(function ($) {
    $(document).ready(function () {
        // When anchor link is clicked
        $('a[href^="#"]').on('click', function (e) {
            // Prevent default action
            e.preventDefault();

            // Get the target anchor
            // no caso no primeiro eu tenho so uma string e no segundo eu usei a string para selecionar o elemento né?
            var target = this.hash;
            var $target = $(target);

            // Define o valor de recuo (ajuste conforme necessário)
            var offset = 100; // Por exemplo, 100px para um cabeçalho fixo

            // Animate scroll to the target with a slower duration
            $('html, body').animate({
                scrollTop: $target.offset().top - offset
            }, 1000); // Increase the duration here (e.g., 2000ms for 2 seconds)
        });
    });
})(jQuery);



let $botao = document.querySelector('.btn-mobile-header'); 

let $menuMobile = document.querySelectorAll('.menu-mobile .menu .menu-item');

$menuMobile.forEach(function($item){
    $item.addEventListener('click',function (){
        document.querySelector('.menu-mobile').classList.toggle('active-menu'); 
      })
})


$botao.addEventListener('click', function() { 
  document.querySelector('.menu-mobile').classList.toggle('active-menu'); 
  document.querySelector('.img-menu-off').classList.toggle('active-img');
});

