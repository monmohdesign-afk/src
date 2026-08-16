<?php
/*
Template Name: WEB予約完了ページ
*/
?>
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
            <div class="form-head">
                <p>
                    WEBよりご予約いただき誠にありがとうございます。<br>
                    送信いただいた内容を確認して1営業日以内に返信いたします。
                </p>
                <p class="txt-red">
                    ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>