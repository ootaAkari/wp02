<?php 

function mytheme_setup() {
    //mytheme.min.css
    add_theme_support( 'wp-block-styles' );
    //レスポンシブ
    add_theme_support('responsive-embeds');
    //editor-style.css
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
    //ページタイトル有効化
    add_theme_support('title-tag');
    //HTML5用記述
    add_theme_support('html5', array(
        'style',
        'script'
    ));
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_enqueue() {
    //styel.css
    wp_enqueue_style (
     'mytheme-style',
     get_stylesheet_uri(),
     //style.css変更時に読み直し
     array(),
     filemtime(get_theme_file_path('style.css'))
    );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue');

