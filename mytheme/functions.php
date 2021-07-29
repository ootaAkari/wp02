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
    //アイキャッチ画像つける
    add_theme_support('post-thumbnails');
    //全幅・幅広有効化
    add_theme_support('align-wide');
    //メニューロケーション
    register_nav_menus(array(
        'primary' => 'ナビゲーション'
    ));
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_enqueue() {

    //Google font 読み込み
    wp_enqueue_style (
        'myfonts',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;700&display=swap',
        array(),
        null //キャッシュクリアはしない
    );
    //WPアイコンフォント読み込み
    wp_enqueue_style (
        'dashicons'
    );
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

//ウィジェットエリア追加
function mytheme_widgets() {
    //ウィジェットエリア登録
    register_sidebar( array(
        'id' => 'sidebar-1',
        'name' => 'フッターメニュー',
        //sectionにする
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>'
    ));
}
add_action('widgets_init', 'mytheme_widgets');
