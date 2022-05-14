<?php

/**
 * 関数
 */

// 親要素を取得
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
      $post_data = get_post($post->post_parent);
      return $post_data->post_name;
  }
}

// Eventクリック不可
//add_filter('eventorganiser_calendar_event_link','__return_false');

?>