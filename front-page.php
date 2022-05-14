<?php get_header(); ?>


<!-- Main Visual -->
<div class="mv">
    <h1 id="loadLogo" class="mv__logo">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/mv_logo.svg" alt="三風 sanpu" class="spNone">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/mv_logo_sp.svg" alt="三風 sanpu" class="pcNone">
    </h1>

    <div class="mv__img"></div>

    <ul class="mv__sns">
        <li><a href="https://www.instagram.com/sanpu_jinrikisha/" target="_blank"><i class="instagram"></i></a></li>
        <li><a href="https://lin.ee/xECZb8j" target="_blank"><i class="line"></i></a></li>
    </ul>
</div>
<!-- Main Visual -->

<!-- Page Content -->
<main class="topContents">

<section class="topSec intro wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
    <div class="topSec__in">
        <div class="topSec__con">
            <h2 class="topSec__ttl about">
                <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/about_ttl.svg" alt="about"></span>
                <span class="ja">三風について</span>
            </h2>

            <div class="topSec__img about sp">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/about.jpg" alt="">
            </div>

            <h3 class="topSec__subTtl">お願いがあります。<br>人力車であなたの「やってみたい」を叶えさせてください。</h3>
            <p>三風は、あなたの好きなシーンに合わせて人力車をご用意する出張専門の人力車サービスです。<br class="pc__hide">人力車の価値を再認識いただけるような、これまでにない、まったく新しい体験をお届けします。</p>
        </div>

        <div class="topSec__img about pc">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/about.jpg" alt="">
        </div>
    </div>

    <div class="anchor"><a href="<?= esc_url(home_url('about/')); ?>"><span>see more</span><i></i></a></div>
</section>


<section class="topSec second wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
    <div class="topSec__in">
        <div class="topSec__con">
            <h2 class="topSec__ttl service">
                <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/service_ttl.svg" alt="service"></span>
                <span class="ja">人力車レンタル</span>
            </h2>

            <div class="topSec__img service sp">
                <span class="service__01"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/service_01.jpg" alt=""></span>
                <span class="service__02"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/service_02.jpg" alt=""></span>
            </div>

            <h3 class="topSec__subTtl">三風は、特別な時に使いたい<br>人力車サービスNo.1を目指します。</h3>
            <p>結婚式の前撮り、再入場やサプライズ演出、お祭りやイベント出展、PV撮影やドラマ出演。イベントや企業の宣伝活動。お客様の要望に合わせていつどこでもかけつけます。お問い合わせ、相談無料。</p>
        </div>

        <div class="topSec__img service pc">
            <span class="service__01"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/service_01.jpg" alt=""></span>
            <span class="service__02"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/service_02.jpg" alt=""></span>
        </div>
    </div>

    <div class="anchor"><a href="<?= esc_url(home_url('service/')); ?>"><span>see more</span><i></i></a></div>
</section>


<div class="topPrice">
    <div class="topPrice__in">
        <h2 class="topSec__ttl price">
            <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/price_ttl.svg" alt="price"></span>
            <span class="ja">料金</span>
        </h2>

        <div class="topPrice__menu wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
            <dl>
                <dt>1日貸切</dt>
                <dd>¥50,000</dd>
            </dl>

            <p>【概要】<br>人力車のレンタルと人力車の走行を1日のレンタルでお好きな時間にご利用いただけます。<br>式に帯同されているカメラマンがいらっしゃいましたら撮影もご自由に可能です。</p>
        </div>

        <p class="anchorTxt wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150"><a href="<?= esc_url(home_url('contact/')); ?>">ご予約はこちらから</a></p>
    </div>
</div>


<section class="topSec topics">
        <h2 class="topSec__ttl topics">
            <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/topics_ttl.svg" alt="topics"></span>
            <span class="ja">トピックス</span>
        </h2>


        <div class="topTopics">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            $count = 0;
        ?>
            <ul>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <li class="wow fadeInUp" data-wow-offset="150">
                    <a href="<?php the_permalink(); ?>" class="topTopics__img">
                    <?php
                        $image = get_field('archive_thumbnail');
                        if(!empty($image)){
                            $alt = $image['alt'];
                            $size = 'thumb';
                            $url = $image['sizes'][ $size ];
                            echo '<img src="'.$url.'" alt="'.$alt.'">';
                        }else{
                            the_post_thumbnail();
                        }
                    ?>
                    </a>
                    <time><?php the_time('Y.m.d'); ?></time>
                    <p><?= wp_trim_words( get_the_title(), 60, '...' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="topTopics__anchor"><span>read more</span><i></i></a>
                </li>
                <?php
                if($count === 0){
                    $count ++;
                    $delay = $count * 3;
                } else{
                    $count ++;
                    $delay = $count * 3;
                }
            endwhile; ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>
        </div>

        <div class="anchor wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150"><a href="<?= esc_url(home_url('topics/')); ?>"><span>see more</span><i></i></a></div>
</section>



<section class="instagramGallery">
    <h2 class="instagramGallery__ttl"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/insta_ttl.svg?1" alt="instagram"></h2>
	 <div class="instagramGallery__in wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
		 <?= do_shortcode('[instagram-feed feed=4]') ?>
	</div>

    <div class="anchor"><a href="https://www.instagram.com/sanpu_jinrikisha/" target="_blank"><span>follow us</span><i></i></a></div>
</section>


<div class="topSchedule">
    <div class="topSchedule__in">
        <h2 class="topSec__ttl schedule">
            <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/schedule_ttl.svg?1" alt="Schedule"></span>
            <span class="ja">スケジュール</span>
        </h2>

        <div id="scheduleArea" class="scheduleArea wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
            <?= do_shortcode('[eo_fullcalendar tooltip="false" responsive="false" titleformatweek="Y年Mj日" columnformatweek="D n/j" tooltip="false"]') ?>
        </div>
    </div>
</div>


<?php if(false): ?>
<div id="contact" class="scrollPoint">
    <section class="topSec topContact">
        <h2 class="topSec__ttl contact">
            <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/frontpage/contact_ttl.svg" alt="contact"></span>
            <span class="ja">お問い合わせ</span>
        </h2>

        <div class="wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
        <?= do_shortcode('[contact-form-7 id="22" title="ContactForm"]'); ?>
        </div>

        <?php if(false): ?>
        <div class="contactForm">
            <dl class="contactForm__row">
                <dt>お名前</dt>
                <dd><input type="text"></dd>
            </dl>
            <dl class="contactForm__row">
                <dt>メールアドレス</dt>
                <dd><input type="email"></dd>
            </dl>
            <dl class="contactForm__row">
                <dt>お電話番号</dt>
                <dd><input type="text"></dd>
            </dl>
            <dl class="contactForm__row">
                <dt>お問い合わせ内容</dt>
                <dd><textarea></textarea></dd>
            </dl>

            <div class="contactForm__policy">
                <input type="checkbox">
                <span><a href="<?= esc_url(home_url('privacy-policy/')); ?>">プライバシーポリシー</a>に同意の上で送信する</span>
            </div>

            <div class="contactForm__submit"><input type="submit" value="send"></div>
        </div>
        <?php endif; ?>
    </section>
</div>
<?php endif; ?>

</main>


<!-- Page Content -->



<?php get_footer(); ?>