<?php global $infos;?>

<section id="category">
    <div class="category-header container">
        <span><?= $infos->cat_nome ;?></span>
        <h3>We Offer Best Services</h3>
        <img src="<?php echo get_template_directory_uri().'/assets/img/category/group.png';?>" alt="">
    </div>
    <div class="card-holder container">
        <?php foreach($infos->cat_repetear as $item): ?>
            <div class="card-bg">
                <div class="card">
                    <img src="<?php echo $item['icone']['url'];?>" alt="">
                    <span><?php echo $item['titulo_do_card'] ;?></span>
                    <p><?php echo $item['texto_do_card'] ;?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>