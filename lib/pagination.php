<?php

/**
 * ページネーション
 */
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;
    global $paged;
     if(empty($paged)) $paged = 1;

    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    if(1 != $pages){
        /*echo "<div class=\"pagination\"><div class=\"pagination-box\">";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";*/
        echo "<div class=\"pagination wow fadeIn\" data-wow-offset=\"150\">";
        if($paged > 1 && $showitems > $pages){
            echo '<a href="'.get_pagenum_link($paged - 1).'" class="prev"><i></i><span>前へ</span></a>';
        } else{
            echo '<span class="blank">&nbsp;</span>';
        }

        echo '<ul>';

        for ($i=1; $i <= $pages; $i++){

            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo '<li>';
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                echo '</li>';
            }

        }

        echo '</ul>';

        if ($paged < $pages && $svhowitems < $pages){
            echo '<a href="'.get_pagenum_link($paged + 1).'" class="next"><span>次へ</span><i></i></a>';
        } else{
            echo '<span class="blank">&nbsp;</span>';
        }
        /*if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";*/
        echo "</div>\n";
    }
}


?>