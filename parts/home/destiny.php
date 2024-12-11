<?php global $infos; ?>


<section id="destiny">
    <div class="header-destiny container">
        <span>
            <?= $infos->destino_top; ?>
        </span>
        <h3>
            <?= $infos->destino_titulo; ?>
        </h3>
    </div>
    <div class="card-holder container ">
        <?php
        $i = 0;
        foreach ($infos->destino_card as $item):
        ?>
            <?php if ($i <= 2): ?>
                <div class="card">
                    <img src="<?php echo $item['imagem']['url']; ?>" alt="">
                    <span class="location"> <?= $item['destino']; ?></span>
                    <span class="price"><?= $item['valor_da_viagem']; ?></span>
                    <span class="days"><?= $item['dias_viagem']; ?></span>
                </div>
            <?php
                $i++;
            endif;
            ?>
        <?php endforeach; ?>
    </div>
</section>