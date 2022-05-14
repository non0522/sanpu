<?php


// 管理画面の設定
require_once('lib/admin.php');

// カスタムフィールドの設定
require_once('lib/custom-field.php');

// 出力の設定
require_once('lib/output.php');

// カスタマイズ
require_once('lib/customize.php');

// 関数まとめ
require_once('lib/tags.php');

// パンくずリスト
require_once('lib/breadcrumb.php');

//ページネーション
require_once('lib/pagination.php');



function imgPathcode() {
    return get_template_directory_uri();
}
add_shortcode('imgPath', 'imgPathcode');


function urlPathcode() {
    return esc_url(home_url());
}
add_shortcode('urlPath', 'urlPathcode');


function remove_tinymce_buttons( $buttons ) {
  $remove = array(
    //'formatselect', // フォーマット
    //'bold',         // 太字
    //'italic',       // イタリック
    //'bullist',      // 番号なしリスト
    //'numlist',      // 番号付きリスト
    //'blockquote',   // 引用
    //'alignleft',    // 左寄せ
    //'aligncenter',  // 中央揃え
    //'alignright',   // 右寄せ
    //'link',         // リンクの挿入/編集
    //'unlink',       // リンクの削除
    'wp_more',      // 「続きを読む」タグを挿入
    //'wp_adv',       // ツールバー切り替え
    //'dfw'           // 集中執筆モード
  ); // ここに削除したいものを記述
  return array_diff($buttons, $remove);
}
add_filter( 'mce_buttons', 'remove_tinymce_buttons' );

function remove_tinymce_buttons_2( $buttons ) {
  $remove = array(
    //'strikethrough', // 打ち消し
    //'hr',            // 横ライン
    //'forecolor',     // テキスト色
    'pastetext',     // テキストとしてペースト
    //'removeformat',  // 書式設定をクリア
    'charmap',       // 特殊文字
    //'outdent',       // インデントを減らす
    //'indent',        // インデントを増やす
    //'undo',          // 取り消し
    //'redo',          // やり直し
    'wp_help'        // キーボードショートカット
  ); // ここに削除したいものを記述
  return array_diff($buttons, $remove);
}
add_filter( 'mce_buttons_2', 'remove_tinymce_buttons_2' );



// オプションページ作成
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'ABOUT 画像',
    'menu_title' => 'ABOUT 画像',
    'menu_slug' => 'option01',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}




?>