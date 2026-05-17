<section id="page-bottom" class="page-bottom">
    <div class="page-bottom_download">
        <h2 class="sec-ttl page-bottom_ttl">
            <p class="sec-ttl_en font_fira-sans">DOWNLOAD</p>
            <p class="sec-ttl_ja">資料ダウンロード</p>
        </h2>
        <a href="<?php echo home_url('/download/'); ?>" class="view-btn_3">
            <span class="view-btn_3-txt font_fira-sans">View more</span>
            <div class="view-btn_3-arrow">
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                        fill="#FFF400" class="view-btn_3-arrow-path" />
                </svg>

            </div>
        </a>
    </div>
    <div class="page-bottom_contact">
        <h2 class="sec-ttl page-bottom_ttl">
            <p class="sec-ttl_en font_fira-sans">CONTACT</p>
            <p class="sec-ttl_ja">お問い合わせ</p>
        </h2>
        <a href="<?php echo home_url('/contact/'); ?>" class="view-btn_3">
            <span class="view-btn_3-txt font_fira-sans">View more</span>
            <div class="view-btn_3-arrow">
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                        fill="#FFF400" class="view-btn_3-arrow-path" />
                </svg>

            </div>
        </a>
    </div>
</section>

<footer id="footer" class="footer">
    <div class="footer-inner">
        <h1 class="footer-logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/front-page/footer-logo.svg" alt="">
            </a>
        </h1>

        <div class="footer-info">
            <p class="footer-info_txt">
                〒550-1000　大阪市西区土佐堀9-5-5<br>
                TEL　06-123-4567<br>
                FAX　06-123-4568
            </p>
        </div>

        <p class="copyright">
            ©︎2021 Global Standard. All Rights Reserved.
        </p>
    </div>

    <a href="<?php echo home_url('/'); ?>" id="js-pagetop" class="pagetop">
        <img src="<?php echo get_template_directory_uri() ?>/img/front-page/pagetop.png" alt="">
    </a>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
