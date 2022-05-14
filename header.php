<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.ico?<?= time(); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/img/apple-touch-icon-180x180.png?<?= time(); ?>">
<link href="<?= get_template_directory_uri(); ?>/assets/js/wow/animate.css?<?= time(); ?>" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/assets/js/slick/slick.css?<?= time(); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css?<?= time(); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<?php if(is_front_page()){ ?>
<header id="header" class="frontpage h">
<?php } else{ ?>
<!-- header -->
<header id="header" class="h">
<?php } ?>
    <div class="h__in">
        <h1 class="h__logo"><a href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/sanpu_logo_yoko.svg" alt="三風 sanpu" class="logoImg"></a></h1>

        <?php get_template_part('inc/nav'); ?>
    </div>

    <div id="spNavBtn" class="h__spBtn"><i></i></div>
</header>
<!--/ header -->


