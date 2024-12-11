<?php global $infos; ?>


<section id="testimonials">

    <div class="tm-holder container">
        <div class="tm-content">
            <span><?php echo $infos->test_sub; ?></span>
            <h3><?php echo $infos->test_title; ?></h3>
        </div>
        <div class="swiper tm-slide">
            <div class="swiper-wrapper">
                <?php foreach ($infos->depoimentos as $item) : ?>
                    <div class="tm-card swiper-slide">
                        <div class="tm-card-intern">
                            <img src="<?php echo $item['icone']['url']; ?>" alt="">
                            <p><?php echo $item['depoimento']; ?></p>
                            <span><?php echo $item['nome']; ?></span>
                            <span><?php echo $item['cargo_ou_lugar']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>