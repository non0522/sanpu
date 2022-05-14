<div class="t02__left">
            <h2 class="t02__ttl"><span class="en">Information</span><span class="ja">新着情報</span></h2>

            <ul id="topNewsNav" class="t02__nav">
                <li><a href="#all">すべて</a></li>
                <li><a href="#school">スクール</a></li>
                <li><a href="#studio">スタジオ</a></li>
                <li><a href="#sound-make">楽曲制作</a></li>
                <li><a href="#other">その他</a></li>
            </ul>
        </div>

        <div id="topNews" class="t02__right">
            <!-- すべて -->
            <div id="cat_all" class="t02__news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="t02__news__hd">
                            <time><?= get_the_time('Y.m.d'); ?></time>
                            <span class="t02__news__cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        </div>
                        <a href="<?= get_permalink(); ?>"><?= wp_trim_words( get_the_title(), 29, '...' ); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <p>関連記事は削除された、もしくは投稿がまだされておりません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <!-- スクール -->
            <div id="cat_school" class="t02__news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'category_school',
                    'posts_per_page' => 5
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="t02__news__hd">
                            <time><?= get_the_time('Y.m.d'); ?></time>
                            <span class="t02__news__cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        </div>
                        <a href="<?= get_permalink(); ?>"><?= wp_trim_words( get_the_title(), 29, '...' ); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <p>関連記事は削除された、もしくは投稿がまだされておりません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <!-- スタジオ -->
            <div id="cat_studio" class="t02__news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'category_studio',
                    'posts_per_page' => 5
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="t02__news__hd">
                            <time><?= get_the_time('Y.m.d'); ?></time>
                            <span class="t02__news__cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        </div>
                        <a href="<?= get_permalink(); ?>"><?= wp_trim_words( get_the_title(), 29, '...' ); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <p>関連記事は削除された、もしくは投稿がまだされておりません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <!-- 楽曲制作 -->
            <div id="cat_sound-make" class="t02__news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'category_sound-make',
                    'posts_per_page' => 5
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="t02__news__hd">
                            <time><?= get_the_time('Y.m.d'); ?></time>
                            <span class="t02__news__cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        </div>
                        <a href="<?= get_permalink(); ?>"><?= wp_trim_words( get_the_title(), 29, '...' ); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <p>関連記事は削除された、もしくは投稿がまだされておりません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <!-- その他 -->
            <div id="cat_other" class="t02__news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'category_other',
                    'posts_per_page' => 5
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <div class="t02__news__hd">
                            <time><?= get_the_time('Y.m.d'); ?></time>
                            <span class="t02__news__cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        </div>
                        <a href="<?= get_permalink(); ?>"><?= wp_trim_words( get_the_title(), 29, '...' ); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <p>関連記事は削除された、もしくは投稿がまだされておりません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

        </div>