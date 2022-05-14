<div class="spNav">
    <div class="spNav__logo"><img src="<?= get_template_directory_uri(); ?>/assets/img/sanpu_logo.svg" alt=""></div>
    <nav class="spNav__lst">
		<ul>
            <li><a href="<?= esc_url(home_url('/')); ?>"><span class="en">top</span><span class="ja">トップ</span></a></li>
            <li><a href="<?= esc_url(home_url('about/')); ?>"><span class="en">about</span><span class="ja">三風について</span></a></li>
            <li><a href="<?= esc_url(home_url('service/')); ?>"><span class="en">service</span><span class="ja">レンタル人力車</span></a></li>

            <li><a href="<?= esc_url(home_url('topics/')); ?>"><span class="en">topics</span><span class="ja">トピックス</span></a></li>

            <li class="reserve"><a href="<?= esc_url(home_url('contact/')); ?>"><span class="en">reservation</span><span class="ja">ご予約はこちら</span></a></li>
        </ul>
    </nav>
    <span id="closeBtn" class="spNav__closeBtn"><i></i>close</span>
</div>
<div class="spNavBg"></div>