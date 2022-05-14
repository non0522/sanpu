<?php


/**
 * 投稿
 */

// 月別アーカイブの表示形式を「2021.7」に変更
/*function bw_get_archives_link($str){
	$str = str_replace('年','.',$str);
	$str = str_replace('月','',$str);
	return $str;
}
add_filter('get_archives_link', 'bw_get_archives_link');*/


// iframeをdivで囲む
function iframe_in_div($the_content) {
	if ( is_singular() ) {
	$the_content = preg_replace('/<iframe/i', '<div class="youtube"><iframe', $the_content);
	$the_content = preg_replace('/<\/iframe>/i', '</iframe></div>', $the_content);
	}
	return $the_content;
}
add_filter('the_content','iframe_in_div');

// アーカイブタイトルの変更
function my_archive_title($title) {
	if ( is_category() ) {
    	$title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    $title = $title. 'の記事一覧';
    return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title');



/**
 * お問い合わせ
 */

//メールフォームの textarea にひらがなが無ければ送信できない（contact form7）
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);
function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';

    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / この内容は送信できません。（日本語でご入力ください）');
    }

    return $result;
}


?>