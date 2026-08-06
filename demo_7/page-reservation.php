<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner form-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                WEB予約
            </p>
            <p class="page-header_ttl-en">
                RESERVE
            </p>
        </div>
    </div>
</div>

<?php if (function_exists('bcn_display')): ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
<?php endif; ?>

<main>
    <section id="booking" class="form booking">
        <div class="form-inner inner">
            <div class="booking-head">
                <div class="form-head booking-head_block">
                    <p class="booking-head_ttl">
                        お電話でのご予約/ご相談
                    </p>

                    <div class="booking-head_tell">
                        <a href="tel:0312345678">03-1234-5678</a>
                        <p>(年中無休 AM9:00〜PM22:00)</p>
                    </div>

                    <p class="booking-head_txt">
                        お急ぎの方は電話での連絡がスムーズです。<br>
                        混雑状況によっては当日受診をご利用いただけない場合がございます。
                        あらかじめご了承ください。
                    </p>
                </div>

                <div class="booking-head_block">
                    <p class="booking-head_ttl">
                        メールでのご予約/ご相談
                    </p>

                    <p class="booking-head_txt">
                        【ご予約に関しての注意点】<br>
                        メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
                        ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                    </p>
                </div>
            </div>

            <div class="form-wrap">
                <div class="sec-ttl">
                    <h2>予約フォーム</h2>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="f868589" html_id="js-form" html_class="form-contents" title="WEB予約"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>