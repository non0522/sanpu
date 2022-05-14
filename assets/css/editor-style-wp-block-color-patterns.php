<?php
/**
* Color Patterns
*
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.9.5
*/

function emanon_custom_colors_css() {

	$main_color           = get_theme_mod( 'main_color', '#161410' );
	$sub_color            = get_theme_mod( 'sub_color', '#cccccc' );
	$link_color           = get_theme_mod( 'link_color', '#9b8d77' );
	$link_hover           = get_theme_mod( 'link_hover', '#b5b5b5' );
	$btn_background_color = get_theme_mod( 'btn_background_color', '#9b8d77' );
	$btn_text_color       = get_theme_mod( 'btn_text_color', '#fff' );
	$h2_style             = get_theme_mod( 'h2_style', 'border-left-background' );
	$h3_style             = get_theme_mod( 'h3_style', 'border-bottom' );
	$h4_style             = get_theme_mod( 'h4_style', 'none' );

	/*--wp block custom color--*/
	$dark_color_01  = get_theme_mod( 'dark_color_01', '#3f5973' );
	$dark_color_02  = get_theme_mod( 'dark_color_02', '#8ba0b6' );
	$dark_color_03  = get_theme_mod( 'dark_color_03', '#9b8d77' );
	$light_color_01 = get_theme_mod( 'light_color_01', '#5f83a8' );
	$light_color_02 = get_theme_mod( 'light_color_02', '#bfcbd7' );
	$light_color_03 = get_theme_mod( 'light_color_03', '#bfb6a8' );

	/*--h2 style--*/
	if ( $h2_style == "none" ) {
	/*---無し--*/
	$h2_css = '
	.editor-styles-wrapper h2{padding:8px 0;}';
	} elseif ( $h2_style == "background" ) {
	/*---背景--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff;}';
	} elseif  ( $h2_style == "balloon" ) {
	/*---吹き出し--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-8px; left:30px; content:""; width:16px; height:16px; background:inherit; transform: rotate(45deg);}';
	} elseif ( $h2_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:' . $sub_color . ';}';
	} elseif  ( $h2_style == "border-left" ) {
	/*---左ボーダー--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h2_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px ' . $sub_color . ';}';
	} elseif  ( $h2_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h2_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){position:relative; padding:8px 0; border-bottom:solid 2px ' . $sub_color . ';}
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h2_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h2_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h2_css = '
	.editor-styles-wrapper h2.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg,' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	}

	/*--h3 style--*/
	if ( $h3_style == "none" ) {
	/*---無し--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:6px 0;}';
	} elseif ( $h3_style == "background" ) {
	/*---背景--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff}';
	} elseif  ( $h3_style == "balloon" ) {
	/*---吹き出し--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-8px; left:30px; content:""; width:16px; height:16px; background:inherit; transform: rotate(45deg);}';
	} elseif ( $h3_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:' . $sub_color . ';}';
	} elseif  ( $h3_style == "border-left" ) {
	/*---左ボーダー--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h3_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px ' . $sub_color . ';}';
	} elseif  ( $h3_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h3_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){position:relative; padding:8px 0; border-bottom:solid 2px ' . $sub_color . ';}
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h3_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h3_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h3_css = '
	.editor-styles-wrapper h3.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	}

	/*--h4 style--*/
	if ( $h4_style == "none" ) {
	/*---無し--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:{padding:4px 0;}';
	} elseif ( $h4_style == "background" ) {
	/*---背景--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px;background-color:' . $main_color . ';color:#fff;}';
	} elseif  ( $h4_style == "balloon" ) {
	/*---吹き出し--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){position:relative; padding:8px 16px; background-color:' . $main_color . '; border-radius:4px; color:#fff;}
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-8px; left:30px; content:""; width:16px; height:16px; background:inherit; transform: rotate(45deg);}';
	} elseif ( $h4_style == "border-left-background" ) {
	/*---左ボーダー＋背景--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';background-color:' . $sub_color . ';}';
	} elseif  ( $h4_style == "border-left" ) {
	/*---左ボーダー--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';}';
	} elseif ( $h4_style == "border-left-bottom" ) {
	/*---左ボーダー+下ボーダ--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:solid 4px ' . $main_color . ';border-bottom:solid 2px ' . $sub_color . ';}';
	} elseif  ( $h4_style == "border-bottom" ) {
	/*--下ボーダー--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0; border-bottom:solid 2px ' . $main_color . '}';
	} elseif ( $h4_style == "border-bottom-two" ) {
	/*---下ボーダー（2カラー）--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){position:relative; padding:8px 0; border-bottom:solid 2px ' . $sub_color . ';}
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none)::before{position:absolute; bottom:-2px; left: 0; z-index:2; content:""; width:20%; height:2px; background-color: ' . $main_color . ';}';
	} elseif  ( $h4_style == "border-left-background-stripe" ) {
	/*---左ボーダー＋背景 ストライプ--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 12px;border-left:4px solid ' . $main_color . ';background:-webkit-repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);background: repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	} elseif ( $h4_style == "border-top-bottom-stripe" ) {
	/*--上下ボーダー ストライプ--*/
	$h4_css = '
	.editor-styles-wrapper h4.wp-block-heading:not(.is-style-none){padding:8px 0 8px 16px; border-top:solid 2px ' .  $main_color . ';border-bottom:solid 2px ' .  $main_color . ';background: -webkit-repeating-linear-gradient(-45deg, #ebedf0, #ebedf0 3px, #fff 3px, #fff 8px);background:repeating-linear-gradient(-45deg, ' . $sub_color . ', ' . $sub_color . ' 3px, #fff 3px, #fff 8px);}';
	}

	$editor_css = '
	/* Link colors */
	.block-editor-rich-text__editable a {
		color: ' . $link_color . '!important;
		cursor: pointer;
	}

	/* Hover colors */
	.block-editor-rich-text__editable a:hover {
		color: ' . $link_hover . '!important;
	}';

	$custom_color_css = '
	.has-dark-01-color {
		color: ' . $dark_color_01 . ';
		}
	.has-dark-02-color {
		color: ' . $dark_color_02 . ';
		}
	.has-dark-03-color {
		color: ' . $dark_color_03 . ';
	}';

	$theme_css = $h2_css.$h3_css.$h4_css.$editor_css.$custom_color_css;

	return apply_filters( 'emanon_custom_colors_css', $theme_css );
}
