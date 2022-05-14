<?php

/**
 * 出力
 */


// タイトルタグの出力
add_theme_support( 'title-tag' );

// タイトルのカスタマイズ
function wp_document_title_separator( $separator ) {
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_separator','wp_document_title_separator' );

// body_classにページスラッグを追加
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = 'pg__'.$page->post_name;
  }
  return $classes;
}

// 保護中の文字を消す
add_filter('protected_title_format', 'remove_protected');
  function remove_protected($title) {
  return '%s';
}


// Wordpressにインストールされているjqueryを無効にする関数
function disablejQuery(){
    if (!is_admin()){
        wp_deregister_script('jquery');
    }
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.5.0.min.js', array(), '2.2.4',true);
}
add_filter('init','disablejquery');


// 出力側の余計な変換機能を無効化する
remove_filter( 'the_content', 'wptexturize' );

// 固定ページ以外は自動整形を復活させる
if ( ! function_exists( 're_wpautop' ) ) {
    add_action('wp', 're_wpautop');
    function re_wpautop() {
        if(!is_page()){
          // 出力側の変換機能を無効化する
          add_filter('the_content', 'wpautop');
        }
    }
}


// DNSプリフェッチ削除
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}

// head 内不要タグ削除
remove_action('wp_head','rest_output_link_wp_head'); //Embed除去
remove_action('wp_head','wp_oembed_add_discovery_links'); //Embed除去
remove_action('wp_head','wp_oembed_add_host_js'); //Embed除去
remove_action('wp_head','feed_links', 2); //feed除去
remove_action('wp_head','feed_links_extra', 3); //feed除去
remove_action('wp_head','rsd_link'); //RSD除去
remove_action('wp_head','wlwmanifest_link'); //Windows Live Writer
remove_action('wp_head','adjacent_posts_rel_link_wp_head'); //ページ先読み除去
remove_action('wp_head','wp_generator'); //WPバージョン除去
remove_action('wp_head','wp_shortlink_wp_head'); // 短縮URL除去

// 絵文字コード削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

?>