<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner form-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                お問い合わせ
            </p>
            <p class="page-header_ttl-en">
                CONTACT
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
    <section id="contact" class="form contact">
        <div class="form-inner inner">
            <div class="form-head contact-head">
                <p>
                    お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
                    以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
                    また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
                </p>
                <p class="txt-red">
                    ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                </p>
            </div>

            <div class="form-wrap">
                <div class="sec-ttl">
                    <h2>お問い合わせ<br class="hidden-sp">フォーム</h2>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="46d5837" html_id="js-form" html_class="form-contents" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>