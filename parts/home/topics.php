<?php global $infos; ?>

<section id="topics">
    <div class="topics-holder container">
        <div class="content">
            <span><?php echo $infos->bene_sub; ?></span>
            <h3><?php echo $infos->bene_title; ?></h3>
            <div class="topic-item-holder">
                <?php foreach($infos->bene_beneficios as $item): ?>
                    <div class="topic-item">
                        <img src="<?php echo $item['icone']['url'] ;?>" alt="">
                        <span><?php echo $item['sub_titulo'] ;?></span>
                        <p><?php echo $item['texto'] ;?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <img class="img-topic" src="<?php echo $infos->bene_img['url'] ;?>" alt="">
    </div>
</section>