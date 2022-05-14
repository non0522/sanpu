<?php get_header(); ?>

<!-- Page Content -->
<div class="pgContents">

<?php breadcrumb(); ?>

<div class="commonIntro w__set w__inset w__max__main">
    <h2 class="commonIntro__ttl intro__ttlTopics wow fadeIn">
        <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/topics/topics_ttl.svg" alt="topics"></span>
        <span class="ja">トピックス</span>
    </h2>
</div>


<?php if(have_posts()): ?>
<div class="postArchiveWrap w__set w__inset w__max__main">
<?php while(have_posts()): the_post(); ?>
    <section class="postArchive wow fadeInUp" data-wow-offset="150">
        <div class="postArchive__img">
            <a href="<?php the_permalink(); ?>">
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
        </div>
        <div class="postArchive__main">
            <time class="postArchive__main__time"><?php the_time('Y.m.d'); ?></time>
            <h3 class="postArchive__main__ttl"><?php the_title(); ?></h3>
            <p><?php $str = get_the_excerpt(); echo wp_trim_words($str,110); ?></p>
            <a href="<?php the_permalink(); ?>"><span>read more</span><i></i></a>
        </div>
    </section>
<?php endwhile; wp_reset_postdata(); ?>

<?php pagination(); ?>
</div>
<?php endif; ?>



</div>
<!-- Page Content -->






<?php get_footer(); ?>