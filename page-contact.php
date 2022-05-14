<?php get_header(); ?>

<!-- Page Content -->
<div class="pgContents">

<?php breadcrumb(); ?>

<section class="ct w__set w__inset">
    <h2 class="aboutIntro__ttl ctTtl wow fadeIn" data-wow-delay=".2s"><img src="<?= get_template_directory_uri(); ?>/assets/img/contact/contact_ttl.svg" alt="about"><span class="ja">お問い合わせ</span></h2>
    <div class="wow fadeInUp" data-wow-delay=".1s" data-wow-offset="150">
        <?= do_shortcode('[contact-form-7 id="22" title="ContactForm"]'); ?>
        </div>
</section>




</div>
<!-- Page Content -->






<?php get_footer(); ?>