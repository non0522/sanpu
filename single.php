<?php get_header(); ?>

<!-- Page Content -->
<div class="pgContents">


<?php breadcrumb(); ?>


<?php if(have_posts()): ?>
<div class="postWrap w__set w__inset w__max__sub02">
<?php while(have_posts()): the_post(); ?>
    <article class="post">
        <h1 class="post__ttl wow fadeIn" data-wow-delay=".2s"><?php the_title(); ?></h1>

        <div class="wow fadeInUp" data-wow-delay=".6s" data-wow-offset="150">
        <div class="post__thumbnail">
        <?php if (has_post_thumbnail()):
        the_post_thumbnail();
        endif; ?>
        </div>

        <time class="post__time"><?php the_time('Y.m.d'); ?></time>

        <div class="post__cont">
            <?php the_content(); ?>
        </div>
        </div>
    </article>

    <div class="postBtn"><a href="<?= esc_url(home_url('topics/')); ?>"><span>back</span><i></i></a></div>
<?php endwhile; wp_reset_postdata(); ?>

</div>
<?php endif; ?>



</div>
<!-- Page Content -->






<?php get_footer(); ?>