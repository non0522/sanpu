<?php get_header(); ?>

<!-- Page Content -->
<div class="pgContents">

<?php breadcrumb(); ?>

<section class="aboutIntro w__set w__inset w__max__main">
    <h2 class="aboutIntro__ttl wow fadeIn" data-wow-delay=".2s"><img src="<?= get_template_directory_uri(); ?>/assets/img/about/about_ttl.svg?1" alt="about"><span class="ja">三風について</span></h2>
    <h3 class="aboutIntro__subTtl wow fadeInUp" data-wow-delay=".6s">断言します。<br class="pcNone">人力車で人生は変わります</h3>

    <p class="wow fadeInUp" data-wow-delay=".9s">三風は、「ろうそくの火」のように温かく寄り添い、あなたを優しく包み込むようなサービスをご提供します。当社一同親身になって、あなたの要望を人力車で実現いたします。<br>人力車事業は経済活動の一つですが、伝統文化の一つでもあります。人力車を通して、日本の伝統や歴史の素晴らしさにもう一度目を向けてほしい。そう思っています。<br>まずは身近なあなたの「思い出」と「楽しみながら、伝統や歴史に触れる機会」を形にする活動に取り組んで参ります。<br>そして、その体験の輪を大切に育て、少しずつ日本中に広げていきます。<br>いずれは笑顔を未来に繋げていけるよう、世界に向けて発信していくことが、今日重要視されているSDGsの取り組みにも発展すると考えています。</p>
</section>


<?php if( have_rows('gallery','option') ): ?>
<div class="aboutGallery wow fadeIn">
    <div class="aboutGallery__in w__set w__max__main">

        <ul id="slickGallery" class="slickGallery">
<?php
    while( have_rows('gallery','option') ) : the_row();
    $image = get_sub_field('gallery__img');
    if( $image ):
        $alt = $image['alt'];
        $size = 'gallery';
        $thumb = $image['sizes'][ $size ];
?>
            <li class="slickGallery__lst"><img src="<?= esc_url($thumb); ?>" alt="<?= $alt; ?>"></li>
<?php endif; endwhile; ?>

        </ul>

        <div class="aboutGallery__left">
            <div class="aboutGallery__controller">
                <span id="galleryPrev" class="prev"><i></i></span>
                <span id="galleryNext" class="next"><i></i></span>
            </div>

            <div id="galleryCurrent" class="aboutGallery__current">01</div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="profile w__set w__inset w__max__main">
    <div class="profile__img spNone wow fadeInUp" data-wow-offset="150"><img src="<?= get_template_directory_uri(); ?>/assets/img/about/profile.jpg" alt=""></div>
    <div class="profile__data">
        <p class="profile__data__name wow fadeInUp" data-wow-offset="150">
            <span class="ja">木村 泰貴<span class="position">創業者｜俥夫</span></span>
            <span class="en">kimura  yasutaka</span>
        </p>
        <div class="profile__img pcNone wow fadeInUp" data-wow-offset="150"><img src="<?= get_template_directory_uri(); ?>/assets/img/about/profile.jpg" alt=""></div>
        <div class="profile__data__history wow fadeInUp" data-wow-offset="150">
            <p>2016年、神奈川県鎌倉市で観光人力車ツアー代理店として開業。子供からお年寄りまで、幅広く人力車の感動を届けたい。人力車で日本を元気にしたいという思いで2022年4月に独立。</p>
        </div>
        <div class="profile__data__msg wow fadeInUp" data-wow-offset="150">
            <p>「出会いを形に」<br>人力車で出会ったお客様は、ありがたいことに1万人を超えます。 一つ一つの「出会い」に感動があり、今の自分の心を形作ってくれました。本当に感謝しています。 人は「出会い」によって人生が変わります。心が折れそうになった時、その出会いは思い出になって、一握りの勇気を与えてくれると信じています。ろうそくの火のように、あなたの心を優しく灯したい。 人力車で木漏れ日の中を、風を浴びて、大切な人といつもより少しだけ特別な時間を過ごす。 思い出は必要です。あなたの出会いと心を繋ぐ大切な糸だから。 子供からお年寄りまでたくさんの方の思い出を人力車で形にしたい。優しく寄り添い、ポッと勇気の火を心に灯したい。そう思っています。 三風はそうやって生まれました。</p>
        </div>
    </div>
</div>


<section class="instagramGallery aboutInstagram">
    <h2 class="instagramGallery__ttl"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/insta_ttl.svg" alt="instagram"></h2>
    <div class="instagramGallery__in wow fadeInUp" data-wow-offset="150">
		 <?= do_shortcode('[instagram-feed feed=4]') ?>
	</div>

    <div class="anchor wow fadeInUp" data-wow-offset="100"><a href="https://www.instagram.com/sanpu_jinrikisha/" target="_blank"><span>follow us</span><i></i></a></div>
</section>


</div>
<!-- Page Content -->






<?php get_footer(); ?>