<?php


class CTR_home
{


    public function __construct()
    {
        add_action('wp_ajax_send_news', array($this, 'enviar_form')); // wp_ajax é um hook , da pra ler assim wp_ajax_{action} , send news é o valor do campo action?
        add_action('wp_ajax_nopriv_send_news', array($this, 'enviar_form'));
    }

    // Quando você quer registrar um método de uma classe como callback para um hook, o WordPress precisa saber duas coisas:
    // A classe onde o método está localizado. e O método a ser chamado.

    // A ação wp_ajax_{minhaFuncao} serve para disponibilizar uma requisição AJAX no WordPress apenas com o usuário logado e dentro do painel administrativo do CMS (wp-admin).
    // Enquanto a ação wp_ajax_nopriv_{minhaFuncao} serve para disponibilizar uma requisição AJAX pelo frontend do site, para visitantes não autenticados.


    // FORM
    public static function enviar_form()
    //O método enviar_form é essencial porque ele age como o manipulador da requisição AJAX no servidor.
    //Você pode implementar qualquer lógica que precise ser executada no servidor.
    //Entre outras coisas que eu posso aprender no futuro
    {
        // Verifica se o campo de e-mail foi enviado
        if (empty($_POST['E-mail'])) { // Tirar esses traços
            wp_send_json_error(['message' => 'Please enter a valid email address']);
        }

        $email = sanitize_email($_POST['E-mail']);

        if (!is_email($email)) {
            wp_send_json_error(['message' => 'Please enter a valid email address.']);
        }

        // Configuração do e-mail
        $to = 'felipekc28@hotmail.com'; 
        $subject = 'Novo cadastro na newsletter';
        $body = "Um novo e-mail foi cadastrado na newsletter: $email";
        $headers = ['Content-Type: text/html; charset=UTF-8'];

        // Envia o e-mail
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_send_json_success(['message' => 'Registration completed successfully!']);
        } else {
            wp_send_json_error(['message' => 'Erro ao enviar o e-mail. Tente novamente mais tarde.']);
        }
    }

    public static function get_info()
    {

        $info = new stdClass();

        $info->cat_nome = get_field('categoria_name');
        $info->cat_intro = get_field('categoria_intro');
        $info->cat_repetear = get_field('cat_card');

        $info->destino_top = get_field('destino_top_frase');
        $info->destino_titulo = get_field('destino_titulo');
        $info->destino_card = get_field('destino_card');

        $info->bene_sub = get_field('sub_titulo_bene');
        $info->bene_title = get_field('titulo_bene');
        $info->bene_beneficios = get_field('itens_de_beneficios');
        $info->bene_img = get_field('imagem_bene');

        $info->test_sub = get_field('sub_title_testimonials');
        $info->test_title = get_field('title_testimonials');
        $info->depoimentos = get_field('depoimentos');

        $info->company = get_field('icones_das_empresas');

        $info->form = get_field('cta_newsletter');

        return $info;
    }
}


new CTR_home;
