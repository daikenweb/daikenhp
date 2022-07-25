<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style',
get_stylesheet_directory_uri() . '/style.css',
array('parent-style')
);
}

function disable_page_wpautop() {
	if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );

add_filter( 'date_i18n', 'ja_date_i18n', 10, 4 );
function ja_date_i18n( $date , $req_format, $i, $gmt){
    if( defined('WPLANG') and WPLANG == 'ja' ) {
        // formatがcの場合、+00:00を+09:00に修正する
        $format= sprintf( '%1$02d:00', get_option( 'gmt_offset' ) );
        $date = str_replace( '+00:00', '+'.$format, $date );
         
        // 日本語環境で、フォーマットに英語表記を使用する
        if ( preg_match( '![SlDFM]!', $req_format ) ) {
            return apply_filters( 'ja_date_i18n', date( $req_format, $i ) );
        }
    }
    return apply_filters( 'ja_date_i18n', $date );
}

//トップに特定のカテゴリーを表示
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
  
add_shortcode('myphp', 'Include_my_php');

//アイキャッチ画像サイズ
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 'full', true );