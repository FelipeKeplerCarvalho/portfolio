<?php global $infos; ?>

<section id="company">
    <div class="container">
        <div class="swiper company-slider ">
            <div class="swiper-wrapper">
                <?php foreach ($infos->company as $item) : ?>
                    <div class="swiper-slide icon-company">
                        <img src="<?php echo $item['icone']['url']; ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination2"></div>
        </div>
    </div>
</section>