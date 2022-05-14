<?php get_header(); ?>

<!-- Page Content -->
<div class="pgContents">

<?php breadcrumb(); ?>

<section class="serviceIntro w__set w__inset w__max__main">
    <h2 class="serviceIntro__ttl wow fadeIn" data-wow-delay=".2s">
        <span class="en"><img src="<?= get_template_directory_uri(); ?>/assets/img/service/service_ttl.svg" alt="service"></span>
        <span class="ja">人力車レンタル</span>
    </h2>

    <p class="wow fadeInUp" data-wow-delay=".6s">三風は特別な時に使いたい人力車サービスNo.１を目指します。<br>結婚式の前撮り、再入場やサプライズ演出、お祭りやイベント出展、PVドラマ出演。<br class="sp__hide">イベントや企業の宣伝活動。<br>お客様の要望に合わせていつどこでもかけつけます。<br>お問い合わせ、相談無料。<br>あなたのご家族やご友人にこんな方はいませんか？</p>
</section>


<div class="serviceLst w__set w__inset w__max__main">
    <ul>
        <li class="serviceLst__01 wow fadeInUp">
            <div class="serviceLst__img">
                <p><span class="ja">結婚式</span><span class="en">wedding</span></p>
            </div>
            <h3 class="serviceLst__ttl">一生に一度の晴れ姿、人力車で撮影してみたい。<br>せっかくだから式場まで人力車で移動してみたい。</h3>
            <p>式場まで人力車で移動することで、２人きりの大切な時間を思い出に残します。<br>未来に向かって同じ方向を見つめ、同じ風を肌で感じ、せせらぎと木漏れ日の中をまっすぐに進む。そこには2人が一つになった時間が流れます。</p>
        </li>

        <li class="serviceLst__02 wow fadeInUp">
            <div class="serviceLst__img">
                <p><span class="ja">お色直し</span><span class="en">dress-change</span></p>
            </div>
            <h3 class="serviceLst__ttl">再入場でみんなをあっと楽しませたい。</h3>
            <p>一味違ったユニークな演出で会場を盛り上げます。<br>おもてなしと遊び心がゲストの思い出に花を咲かせます。ずっと記憶に残る楽しい思い出をご提供します。</p>
        </li>

        <li class="serviceLst__03 wow fadeInUp">
            <div class="serviceLst__img">
                <p><span class="ja">撮影</span><span class="en">shooting</span></p>
            </div>
            <h3 class="serviceLst__ttl">MV、映画撮影で人力車を手配したい。</h3>
            <p>撮影場所に合わせて、人力車を手配いたします。<br>当日は出演者の方に人力車の扱い方を当社スタッフが指南します。人力車について未経験でもご安心ください。</p>
        </li>
    </ul>
</div>


<section class="serviceFlow">
    <h3 class="serviceCommonTtl">
        <span class="ja">ご利用の流れ</span>
        <span class="en">how to rental</span>
    </h3>

    <div class="serviceCommonBg">
        <div class="w__set w__inset w__max__main">
            <ul class="flow">
                <li class="wow fadeInUp" data-wow-offset="150">
                    <i class="flow__num">01</i>
                    <p class="flow__ttl">お問い合わせ</p>
                    <p class="flow__txt">まずはメールフォームもしくは予約フォームからお問い合わせください。</p>
                </li>

                <li class="wow fadeInUp" data-wow-offset="150">
                    <i class="flow__num">02</i>
                    <p class="flow__ttl">打ち合わせ</p>
                    <p class="flow__txt">実際に人力車をどのようなシーンでどのように使うかをお打ち合わせさせていただきます。</p>
                </li>

                <li class="wow fadeInUp" data-wow-offset="150">
                    <i class="flow__num">03</i>
                    <p class="flow__ttl">リハーサル</p>
                    <p class="flow__txt">余興で人力車を使用される場合は事前にリハーサルを組ませていただきます。</p>
                </li>

                <li class="wow fadeInUp" data-wow-offset="150">
                    <i class="flow__num">04</i>
                    <p class="flow__ttl">結婚式当日</p>
                    <p class="flow__txt">当日は一生に一度の結婚式を人力車でさらに彩ります。</p>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="servicePrice">
    <h3 class="serviceCommonTtl">
        <span class="ja">ご利用料金</span>
        <span class="en">price</span>
    </h3>

    <div class="serviceCommonBg">
        <div class="topPrice__menu wow fadeInUp" data-wow-offset="150">
            <dl>
                <dt>1日貸切</dt>
                <dd>¥50,000</dd>
            </dl>

            <p>【概要】<br>人力車のレンタルと人力車の走行を1日のレンタルでお好きな時間にご利用いただけます。<br>式に帯同されているカメラマンがいらっしゃいましたら撮影もご自由に可能です。</p>
        </div>

        <p class="anchorTxt wow fadeInUp" data-wow-offset="150"><a href="<?= esc_url(home_url('contact/')); ?>">ご予約はこちらから</a></p>
    </div>
</section>



</div>
<!-- Page Content -->






<?php get_footer(); ?>