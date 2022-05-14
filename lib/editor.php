<?php


add_editor_style( 'css/editor-style.css' );
add_theme_support( 'editor-styles' );


// 埋め込みコンテンツをレスポンシブ対応にする
add_theme_support( 'responsive-embeds' );


add_filter( 'allowed_block_types', 'custom_allowed_block_types' );
function custom_allowed_block_types( $allowed_block_types ) {
  $allowed_block_types = array(
    // 一般ブロック
    'core/paragraph',           // 段落
    'core/heading',             // 見出し
    'core/image',               // 画像
    'core/quote',               // 引用
    'core/list',                // リスト
    'core/video',               // 動画

    // フォーマット
    'core/code',                // ソースコード
    'core/freeform',            // クラシック
    'core/html',                // カスタムHTML
    'core/preformatted',        // 整形済み
    'core/pullquote',           // プルクオート

    // レイアウト要素
    'core/button',              // ボタン
    'core/spacer',              // スペーサー

    // ウィジェット
    'core/shortcode',           // ショートコード

    // 埋め込み
    'core/embed',               // 埋め込み
    'core-embed/twitter',       // Twitter
    'core-embed/youtube',       // YouTube
    'core-embed/facebook',      // Facebook
    'core-embed/instagram',     // Instagram
    'core-embed/wordpress',     // WordPress
    'core-embed/tumblr',        // Tumblr

    // 再利用ブロック
    'core/block',               // 再利用ブロック
  );
  return $allowed_block_types;
}

?>