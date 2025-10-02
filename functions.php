<?php
/**
 * Método MASD - WordPress Theme Functions
 * Tema para landing page do curso Método MASD - Supere o Medo de Dirigir
 */

// Suporte a recursos do tema
function masd_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'masd_theme_support');

// Registrar e carregar estilos
function masd_enqueue_styles() {
    // TailwindCSS CDN (para produção, compile localmente)
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css');
    
    // Estilos customizados
    wp_enqueue_style('masd-style', get_stylesheet_uri(), array('tailwindcss'), '1.0.0');
    
    // Lucide Icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'masd_enqueue_styles');

// Registrar menus
function masd_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'masd'),
    ));
}
add_action('init', 'masd_register_menus');

// Configurações personalizadas do tema
function masd_customize_register($wp_customize) {
    // Seção de configurações do curso
    $wp_customize->add_section('masd_settings', array(
        'title' => __('Configurações MASD', 'masd'),
        'priority' => 30,
    ));
    
    // Link de compra Kiwify
    $wp_customize->add_setting('masd_kiwify_link', array(
        'default' => 'https://pay.kiwify.com.br/f1hS5iq',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('masd_kiwify_link', array(
        'label' => __('Link de Compra (Kiwify)', 'masd'),
        'section' => 'masd_settings',
        'type' => 'url',
    ));
    
    // Preço do curso
    $wp_customize->add_setting('masd_price', array(
        'default' => 'R$ 197,00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('masd_price', array(
        'label' => __('Preço do Curso', 'masd'),
        'section' => 'masd_settings',
        'type' => 'text',
    ));
}
add_action('customize_register', 'masd_customize_register');

// Função helper para obter link de compra
function masd_get_purchase_link() {
    return get_theme_mod('masd_kiwify_link', 'https://pay.kiwify.com.br/f1hS5iq');
}

// Função helper para obter preço
function masd_get_price() {
    return get_theme_mod('masd_price', 'R$ 197,00');
}

// Desabilitar comentários (não necessário para landing page)
function masd_disable_comments() {
    return false;
}
add_filter('comments_open', 'masd_disable_comments', 20, 2);
add_filter('pings_open', 'masd_disable_comments', 20, 2);

// Remover emoji scripts (performance)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
