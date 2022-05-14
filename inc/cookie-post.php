<?php
//閲覧履歴　表示

global $rireki;

//履歴が現在の記事を除いて、一つでもある場合
if (!empty($rireki)) :
?>
<section class="cookie__section">
<h4 class="cookie__ttl m__ttl">Related items</h4>

<div class="item__archive cookie__lst">
<ul>
<?php
$args = array(
'post_type' => 'shop',
'posts_per_page' => -1,
'post__in' => $rireki,
'orderby' => 'post__in',
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) :
while ($the_query->have_posts()) : $the_query->the_post();

$ttl = get_the_title();
$price = get_field('item_price');
$price = number_format($price);

date_default_timezone_set('Asia/Tokyo');
$days = 7;
$today = date_i18n('U');
$entry_day = get_the_time('U');
$keika = date('U',($today - $entry_day)) / 86400;

$sold_out = get_field('soldout');
?>

<!-- loop start -->
<li>
    <div class="item__archive__lst">
    <?php
    if ( $days > $keika ):
    echo '<i class="new"></i>';
    endif;
    ?>
        <a href="<?php the_permalink(); ?>" class="item__archive__img">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?= get_the_post_thumbnail_url('','thumb'); ?>?<?= time(); ?>" alt="<?= $ttl; ?>">
            <?php endif; ?>
        </a>
        <?php
        if(!empty($sold_out)){
        echo '<h2 class="item__archive__ttl soldout">'.$ttl.'</h2>';
        } else{
        echo '<h2 class="item__archive__ttl">'.$ttl.'</h2>';
        }
        ?>
        <p class="item__archive__price">¥<?= $price; ?></p>
    </div>
</li>
<!-- loop end -->
<?php
endwhile; endif;
wp_reset_postdata(); ?>
</ul>
</div>
</section>
<?php endif; ?>