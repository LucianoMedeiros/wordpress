<?php 

//Variáveis Globais
function global_variables() {
    global $image_path
         , $js_path
         , $page_id;

    $page_id = get_the_ID();
    $image_path = get_bloginfo('template_url') . '/assets/img';
    $js_path    = get_bloginfo('template_url') . '/assets/js';
}
add_action('after_setup_theme', 'global_variables');

//Trocar Logo do ADMIN
function custom_admin_logo() {
    echo '
        <style>
            h1 a {
                width: 150px !important;
                height: 150px !important;
                background: url("'.get_bloginfo("template_directory").'/assets/img/logo-admin.png") no-repeat center center / contain !important;
            }
        </style>
    ';
}
add_action('login_head', 'custom_admin_logo');

//Menus customizados
function menus() {

	$items = array(
        'main' => __( 'Menu Principal', 'newberry' ),
        'secondary' => __( 'Menu Auxiliar', 'newberry' ),
		'mobile'   => __( 'Mobile Menu', 'newberry' ),
		'footer'   => __( 'Footer Menu', 'newberry' ),
		'social'   => __( 'Social Menu', 'newberry' ),
	);

	register_nav_menus( $items );
}
add_action('init', 'menus');

//Sidebar
function widget_sidebar() {
    register_sidebar(
        array(
            'name'          => 'Sidebar 1',
            'id'            => "sidebar-1",
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li>',
            'after_widget'  => "</li>\n",
            'before_title'  => '<h2>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sidebar 2',
            'id'            => "sidebar-2",
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li>',
            'after_widget'  => "</li>\n",
            'before_title'  => '<h2>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action('init', 'widget_sidebar');

//Gerador de Links
function generate_link($page_slug, $link_text = '', $class_name='') {
    $page           = get_page_by_path($page_slug);
    $text           = ($link_text === '' ? $page->post_title : $link_text);
    $url            = get_site_url() . '/' . $page->post_name;
    $current_url    = get_permalink(); 
    $active_class   = ($current_url === $url ? 'active' : '');

    $html_link      = '
        <a href="'.$url.'" class="'.$active_class.'">
            '. $text .'
        </a>
    ';

    return $html_link;
}

function theme_supports() {
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
}
add_action('after_setup_theme', 'theme_supports');
