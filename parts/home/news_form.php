<?php global $infos; ?>

<section id="Form">
    <div class="form-bg container">
        <div class="form-holder ">
            <img class="arrow-img" src="<?= get_template_directory_uri() ?>/assets/img/form/form-icon.png" alt="">
            <h2>
                <?= $infos->form; ?>
            </h2>
            <form id="news-form" action="<?= admin_url('admin-ajax.php');?>" method="post"> 
                <!-- Admin_url('admin-ajax.php')

                2. Interceptação em admin-ajax.php
                Quando o admin-ajax.php recebe a requisição:

                Ele verifica o valor do parâmetro action.
                Com base nesse valor, constrói o nome do hook:
                Para usuários autenticados: wp_ajax_{action}.
                Para usuários não autenticados: wp_ajax_nopriv_{action}.

                O WordPress dispara o hook correspondente ao nome construído. 
                Isso acontece internamente no código do admin-ajax.php.

                Quando o WordPress chega no ponto onde encontra o hook wp_ajax_my_action ou wp_ajax_nopriv_my_action, 
                ele executa o callback associado (my_action_handler neste caso). (FUNÇÃO QUE TA NO CONTROLLER)

                -->

                <input type="hidden" name="recaptcha_response" id="recaptchaResponse" /> <!-- Ta invisivel pq o recaptcha já vem preenchido -->
                <input type="hidden" name="action" value="send_news"> <!-- send_news é o valor usado no campo action no seu formulário. Ele é o nome que você escolhe 
                para a sua ação personalizada. -->
                <input type="text" name="E-mail" id="input-email" placeholder="Your E-mail">
                <button type="submit">Subscribe</button>
            </form>
            <span id="form-response" ></span>
            <img class="plus" src="<?= get_template_directory_uri(); ?>/assets/img/form/plus.png" alt="">
        </div>
    </div>
</section>