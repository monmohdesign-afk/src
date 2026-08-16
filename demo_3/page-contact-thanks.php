<?php
/*
Template Name: お問い合わせ完了ページ
*/
?>
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
                    お問い合わせありがとうございました。<br>
                    3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。
                </p>
                <p class="txt-red">
                    ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>