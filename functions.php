<?php

add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header' => __('Header Menu'),
            'other' => __('Other Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function wordpress_pagination()
{
    global $wp_query;

    $big = 999999999;

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '<span class="material-icons-round menu-mobile">navigate_before</span>',
        'next_text' => '<span class="material-icons-round menu-mobile">navigate_next</span>'
    ));
}

add_theme_support('title-tag');

function add_meta_tags()
{
    echo '<meta name="description" content="Descubra dicas e tutoriais de programação enquanto desfruta do aroma e sabor do café em nosso blog especializado em programação e café.">';
    echo '<meta property="og:title" content="Código com café" />';
    echo '<meta property="og:description" content="Descubra dicas e tutoriais de programação enquanto desfruta do aroma e sabor do café em nosso blog especializado em programação e café." />';
    echo '<meta name="keywords" content="Programação, Desenvolvimento web, Linguagens de programação, Café, Dicas de programação, Tutoriais de programação, Melhores práticas de programação, Café e produtividade, Ferramentas de desenvolvimento" />';
    echo '<meta property="og:type" content="website" />';
    echo '<meta property="og:site_name" content="CodigoComCafe" />';
}
add_action('wp_head', 'add_meta_tags');