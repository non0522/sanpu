<div id="sticky" class="sticky">

<?php if(is_page('entertainment-school')): ?>
    <div class="stickyBnr">
        <a href="<?= esc_url(home_url('school/acting-lesson/')); ?>" class="stickyBnr__anchor"><img src="<?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_02.jpg" srcset="<?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_02.jpg 1x, <?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_02@2x.jpg 2x" alt="アクティングレッスン"><i></i></a>
    </div>
<?php else: ?>
    <div class="stickyBnr">
        <a href="<?= esc_url(home_url('school/entertainment-school/')); ?>" class="stickyBnr__anchor"><img src="<?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_01.jpg" srcset="<?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_01.jpg 1x, <?= get_template_directory_uri(); ?>/assets/img/school/sticky_bnr_01@2x.jpg 2x" alt="ボイトレ・ボーカルレッスン"><i></i></a>
    </div>
<?php endif; ?>

    <div class="stickyContact">
        <p class="stickyContact__ttl">CONTACT</p>
        <div class="stickyContact__anchor">
            <a href="<?= esc_url(home_url('contact/')); ?>">
                <span>無料見学について<br>お問い合わせする</span>
                <i></i>
            </a>
        </div>
    </div>

</div>