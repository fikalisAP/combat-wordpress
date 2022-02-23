<?php
add_action('wp_enqueue_scripts',  function () {

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
    wp_enqueue_style('fonts-googleapsis', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');


    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'), 'null', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');



add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('header-menu', 'Верхнее меню сайта');
}


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function services_post_types()
{
    register_post_type('service', [
        'label'  => null,
        'labels' => [
            'name'               => 'Услуги', // основное название для типа записи
            'singular_name'      => 'Услуга', // название для одной записи этого типа
            'add_new'            => 'Добавить', // для добавления новой записи
            'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование', // для редактирования типа записи
            'new_item'           => 'Новое', // текст новой записи
            'view_item'          => 'Смотреть', // для просмотра записи этого типа.
            'search_items'       => 'Искать', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Усуги', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [
            'category'
        ],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}
add_action('init', 'services_post_types');