<footer class="f">
    <div class="f__logo">
        <a href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/sanpu_logo.svg" alt="sanpu 三風"></a>
    </div>

    <nav class="f__nav">
        <ul>
            <li><a href="<?= esc_url(home_url('/')); ?>">home</a></li>
            <li><a href="<?= esc_url(home_url('contact/')); ?>">contact</a></li>
            <li><a href="https://www.instagram.com/sanpu_jinrikisha/" target="_blank">instagram</a></li>
        </ul>
    </nav>

    <small class="copyright">© lc co.,ltd. all rights reserved.</small>
</footer>



<?= get_template_part('inc/sp-nav'); ?>


<div id="loadingBg" class="loadingBg"></div>



<?php wp_footer(); ?>

<?php if(false): ?>
<script src="<?= get_template_directory_uri(); ?>/assets/js/exresize.js?<?= time(); ?>"></script>
<script>
//　ユーザーエージェントの判別
var userAgent = window.navigator.userAgent.toLowerCase();

// ハッシュ取得
var hash = location.hash;


// その他 変数
var $window = $(window),
$calender = $('#eo_fullcalendar_2'),
$calenderBtn = $('#eo_fullcalendar_2 .fc-button'),
$area = $('#scheduleArea'),
initHeight,
currentHeight,
adjust,
windowScroll;

$window.on('resize', function(){
    calenderResize();
});

$(document).on('click', '.fc-button', function(e) {
    $calender.exResize(function() {
        calenderResize();
    });
});

$window.on('load', function(){
    if(hash === '#contact'){
        windowScroll = $window.scrollTop();
        initHeight = $area.height();
        setTimeout(function(){
            calenderResize();
            if (userAgent.indexOf("msie") != -1 || userAgent.indexOf("trident") != -1) {
            } else if (userAgent.indexOf("edg") != -1 || userAgent.indexOf("edge") != -1) {
            } else if (userAgent.indexOf("opr") != -1 || userAgent.indexOf("opera") != -1) {
            } else if (userAgent.indexOf("chrome") != -1) {
            } else if (userAgent.indexOf("safari") != -1) {
                // サファリの場合のみ適用
                scrollAdjust();
            }
            if(userAgent.indexOf('android') != -1) {
                scrollAdjust();
            }
        }, 1500);
    }else{
        setTimeout(function(){
            calenderResize();
        }, 1500);
    }
});

// カレンダーリサイズに合わせてコンテンツの高さを変更
function calenderResize(){
    currentHeight = $calender.height();
    currentHeight = Math.floor(currentHeight);
    $area.css('height', currentHeight);
}
// カレンダー取得時の高さに合わせてWindowのスクロール位置を変更
function scrollAdjust(){
    adjust = initHeight - currentHeight;
    adjust = $window.scrollTop() - adjust;
    $window.scrollTop(adjust);
}
</script>
<?php endif; ?>

<script src="<?= get_template_directory_uri(); ?>/assets/js/base.js?<?= time(); ?>"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/scroll.js?<?= time(); ?>"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/wow/wow.min.js?<?= time(); ?>"></script>
<script>new WOW().init();</script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>


<script>
var $body = $('body'),
$loadBg = $('#loadingBg'),
$loadLogo = $('#loadLogo');
$(window).on('load', function(){
    $body.addClass('complete');
    $loadBg.addClass('loadBg');
    $loadLogo.addClass('loadLogo');
});
</script>

<?php if(is_front_page()): ?>
<script>
var $window = $(window),
    $wh = $window.height(),
    $header = $('#header'),
    showClass = 'isShow';

$window.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > $wh ) {
        $header.addClass(showClass);
    } else {
        $header.removeClass(showClass);
    }
});
</script>
<?php endif; ?>

<?php if(is_page('about')): ?>
<script>
var $slider = $('#slickGallery');

$slider.slick({
    arrows: false,
    infinite: false,
    dots: false,
});

$('#galleryPrev').on('click', function(){
    $slider.slick('slickPrev');
});
$('#galleryNext').on('click', function(){
    $slider.slick('slickNext');
});

$slider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
	var i = (currentSlide ? currentSlide : 0) + 1;
	$('#galleryCurrent').text('0'+i);
});
</script>
<?php endif; ?>


</body>
</html>