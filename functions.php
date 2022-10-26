<?php

/**
 * Theme kirov functions
 */

// Стили и скрипты
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900&display=swap');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
    if (is_page(10)) {
        wp_enqueue_script('reporting-calc', get_template_directory_uri() . '/assets/js/reporting-calc.js', array('jquery'), 'null', true);
    }
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

add_filter('upload_mimes', 'svg_upload_allow');

// Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

// Хлебные крошки
function breadcrumb($sep = ' > ')
{
    global $post;
    $out = '';
    $out .= '<div class="breadcrumbs">';
    $out .= '<div class="container">';
    $out .= '<a href="' . home_url('/') . '">Главная</a>';
    $out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
    if (is_single()) {
        $terms = get_the_terms($post, 'category');
        if (is_array($terms) && $terms !== array()) {
            $out .= '<a href="' . get_term_link($terms[0]) . '">' . $terms[0]->name . '</a>';
            $out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
        }
    }
    if (is_singular()) {
        $out .= '<span class="breadcrumbs-last">' . get_the_title() . '</span>';
    }
    if (is_search()) {
        $out .= get_search_query();
    }
    $out .= '</div>';
    $out .= '</div><!--breadcrumbs-->';
    return $out;
}

// Отправка лидов
add_filter('script_loader_tag', 'add_type_module',    10, 3);
add_action('wp_enqueue_scripts', 'bitrix_enqueue_lead_js');

function bitrix_enqueue_lead_js()
{
    wp_enqueue_script('cek_utm_adv', "https://nalog.cek.ru/js/modal/cek_utm_adv.js", null, null, true);
    wp_enqueue_script('bitrix', get_stylesheet_directory_uri() . '/assets/js/bitrix.js', array('jquery', 'cek_utm_adv'), null, true);
    $translation_array = array('templateUrl' => get_stylesheet_directory_uri());
    //after wp_enqueue_script
    wp_localize_script('bitrix', 'add_info', $translation_array);
}

function add_type_module($tag, $handle, $src)
{
    // if not your script, do nothing and return original $tag
    if ('cek_utm_adv' !== $handle) {
        return $tag;
    }
    //return '<script src="https://nalog.cek.ru/js/modal/cek_utm_adv.js" type=\'module\'></script>';
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    return $tag;
}

// Удаляем префикс «category» из URL рубрик
add_filter('category_link', 'true_remove_category_from_category', 1, 1);

function true_remove_category_from_category($cat_url)
{
    $cat_url = str_replace('/category', '', $cat_url);
    return $cat_url;
}

// Счетчик просмотров
add_filter("wp_head", "wpds_increament_post_view");
function get_post_views($post_id = NULL)
{
    global $post;
    if ($post_id == NULL)
        $post_id = $post->ID;
    if (!empty($post_id)) {
        $views_key = 'wpds_post_views';
        $views = get_post_meta($post_id, $views_key, true);
        if (empty($views) || !is_numeric($views)) {
            delete_post_meta($post_id, $views_key);
            add_post_meta($post_id, $views_key, '0');
            return "0";
        } else if ($views == 1)
            return "1";
        return $views;
    }
}
function wpds_increament_post_view()
{
    global $post;

    if (is_singular()) {
        $views_key = 'wpds_post_views';
        $views = get_post_meta($post->ID, $views_key, true);
        if (empty($views) || !is_numeric($views)) {
            delete_post_meta($post->ID, $views_key);
            add_post_meta($post->ID, $views_key, '1');
        } else
            update_post_meta($post->ID, $views_key, ++$views);
    }
}
