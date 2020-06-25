<?php
/**
 * 
 * Functions do site
 * @package leandro-ste
 */

define('THEME', get_template_directory_uri());

function load_assets_site() {
    wp_enqueue_style('bootstrap', THEME . '/style/css/bootstrap.min.css');
    wp_enqueue_style('galeria-css', THEME . '/style/css/unite-gallery.css');
    wp_enqueue_style('site-plugins', THEME . '/style/css/plugins.css');
  
    //wp_enqueue_style('blue-style', THEME . '/style/css/color/blue.css');
    wp_enqueue_style('icons-style', THEME . '/style/type/icons.css');
    wp_enqueue_style('style-theme', THEME . '/style.css');

    wp_enqueue_script('jquery', THEME . '/style/js/jquery.min.js', '' , false);
    wp_enqueue_script('bootstrap-js', THEME . '/style/js/bootstrap.min.js', ['jquery'], true);
    wp_enqueue_script('site-plugins-js', THEME . '/style/js/plugins.js', ['jquery'], true);
    wp_enqueue_script('classie', THEME . '/style/js/classie.js', ['jquery'], true);
    wp_enqueue_script('jquery-themepunch', THEME . '/style/js/jquery.themepunch.tools.min.js');
    wp_enqueue_script('scripts', THEME . '/style/js/scripts.js', ['jquery', 'site-plugins-js'], true);
    wp_enqueue_script('acesso-restrito', THEME . '/style/js/acesso-restrito.js', ['jquery'], true);
    wp_enqueue_script('galeria', THEME . '/style/js/unitegallery.min.js', ['jquery'], true);
    wp_enqueue_script('galeria-tema', THEME . '/style/js/ug-theme-tiles.js', ['jquery'], true);
    
    wp_enqueue_script('custom-js', THEME . '/style/js/custom.js', ['jquery', 'site-plugins-js', 'scripts'], true);

    wp_localize_script( 'acesso-restrito', 'WPObject', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ) );
}

add_action('wp_enqueue_scripts', 'load_assets_site');

/**
 * 
 * funções
 */
function getGaleria($id) {
    $galeria = get_fields($id);
    return $galeria['imagem'];
}

function getPorcentagem($number) {
    $porcent = 100;
    if ($number < $porcent) $porcent = $number;

    return $porcent;
}

function getDepoimentos() {
    $args = [
        'post_type' => 'depoimentos',
        'posts_per_page' => -1
    ];

    $depoimentos = new WP_Query($args);
    
    $array = [];
    foreach ($depoimentos->posts as $post) {
        $array[] = get_fields($post->ID);
    }

    return $array;
}

function checkUser() {
    if (session_id() == '') session_start();
    if (!isset($_SESSION['logged'])) {
        HEADER('location:'.get_home_url());
    }
}

// Função para checar se o usuário existe
function restrito() {
    $fields = get_fields($_POST['id']);
    $msg = '';
    if ($fields['login'] == $_POST['dados']['usuario'] && $fields['senha'] == $_POST['dados']['senha']) {
        if (session_id() == '') session_start();
        $_SESSION['logged'] = true;
        $msg = 'usuario autorizado';
    } else {
        $msg = 'usuario nao autorizado';
    }

    echo json_encode(['msg' => $msg]);
    exit;
}

add_action('wp_ajax_restrito', 'restrito');
add_action('wp_ajax_nopriv_restrito', 'restrito');