<?php

add_theme_support('post-thumbnails');

function cadastrandoPostTypeImoveis () {
    $nomeSingular = 'Imóvel';
    $nomePlural = 'Imóveis';
    $description = 'Imóveis da imobiliária Malura';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'description' => $description,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => $supports
    );

    register_post_type('imovel', $args);
}

add_action('init', 'cadastrandoPostTypeImoveis');

function registrar_menu_navegacao() {
    register_nav_menu('header-menu', 'main_menu');
}

add_action('init', 'registrar_menu_navegacao');


function geraTitle() {
    bloginfo ('name');
    if( !is_home() ) echo ' | ';
    the_title();
}

function registraTaxonomia() {
    $nomeSingular = 'Localização';
    $nomePlural = 'Localizações';

    $labels = array(
        'name' => $nomePlural,
        'singular_name' => $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true
    );

    register_taxonomy('localizacao', 'imovel', $args);
}

add_action('init', 'registraTaxonomia');