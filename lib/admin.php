<?php

/**
 * 管理画面 - 全般
 */


//プラグインの更新通知を非表示
add_filter('pre_site_transient_update_plugins', '__return_null');

//テーマ更新通知を非表示
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );


/**
 * 管理画面 - 投稿
 */

// アイキャッチを有効に
add_theme_support( 'post-thumbnails');
add_image_size('thumb','616','368','true');
add_image_size('main','1480','884','true');
add_image_size('gallery','555','336','true');

// 管理ページの投稿画面から不要な機能を削除
function remove_post_function() {
    //remove_post_type_support( 'post', 'thumbnail' ); // アイキャッチ（投稿）
    remove_post_type_support( 'page', 'thumbnail' ); // アイキャッチ（固定ページ）

    unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリ
    unregister_taxonomy_for_object_type( 'event-category', 'event' ); // カテゴリ
    unregister_taxonomy_for_object_type( 'post_tag', 'post' ); // タグ
    unregister_taxonomy_for_object_type( 'event-tag', 'event' ); // タグ

}
add_action( 'init', 'remove_post_function' );





// ビジュアルエディタ
if ( ! function_exists( 'theme_setup' ) ) :
    function theme_setup() {
        add_theme_support( 'editor-styles' );
        add_editor_style( 'style-editor.css' );
    }
endif;
add_action( 'after_setup_theme', 'theme_setup' );


// ビジュアルエディターCSSを有効にする
add_editor_style('assets/css/editor-style.css');
function custom_editor_settings( $initArray ){
    $initArray['body_class'] = 'editor-area';
    $initArray['block_formats'] = '見出し=h2;中見出し=h3;段落=p';
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );



//　カスタムフィールドもプレビューできるようにする
function get_preview_id($postId) {
    global $post;
    $previewId = 0;
    if ( isset($_GET['preview'])
            && ($post->ID == $postId)
                && $_GET['preview'] == true
                    &&  ($postId == url_to_postid($_SERVER['REQUEST_URI']))
        ) {
        $preview = wp_get_post_autosave($postId);
        if ($preview != false) { $previewId = $preview->ID; }
    }
    return $previewId;
}

add_filter('get_post_metadata', function($meta_value, $post_id, $meta_key, $single) {
    if ($preview_id = get_preview_id($post_id)) {
        if ($post_id != $preview_id) {
            $meta_value = get_post_meta($preview_id, $meta_key, $single);
        }
    }
    return $meta_value;
}, 10, 4);

add_action('wp_insert_post', function ($postId) {
    global $wpdb;
    if (wp_is_post_revision($postId)) {
        if (count($_POST['fields']) != 0) {
            foreach ($_POST['fields'] as $key => $value) {
                $field = get_field($key);
                if ( !isset($field['name']) || !isset($field['key']) ) continue;
                if (count(get_metadata('post', $postId, $field['name'], $value)) != 0) {
                    update_metadata('post', $postId, $field['name'], $value);
                    update_metadata('post', $postId, "_" . $field['name'], $field['key']);
                } else {
                    add_metadata('post', $postId, $field['name'], $value);
                    add_metadata('post', $postId, "_" . $field['name'], $field['key']);
                }
            }
        }
        do_action('save_preview_postmeta', $postId);
    }
});

?>