<?php wp_footer(); ?>
</body>

<?php

$infos = CTR_Geral::get_info();; ?>

<footer>
    <div class="container">
        <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/Jadoo.png" alt="">
            <span>Book your trip in minute, get full Control for much longer.</span>
        </div>

        <div class="social-midia">
            <div class="div">
                <div class="icons-holder">
                    <?php foreach ($infos->redes as $item): ?>
                        <picture>
                            <img src="<?= $item['icone']['url']; ?>" alt="">
                        </picture>
                    <?php endforeach; ?>
                </div>
                <div class="app">
                    <span>Discover our app</span>
                    <div class="app-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/Google.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/Play.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <span>All rights reserved@jadoo.co</span>
    </div>
</footer>

</html>