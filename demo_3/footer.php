<footer id="footer" class="footer">
    <div class="footer_wave"></div>

    <div class="footer-wrap">
        <div class="footer-inner">
            <div class="footer-intro">
                <div class="footer-info">
                    <div class="footer-intro_ttl">
                        <div class="footer-intro_ttl-img">
                            <img src="./img/site-logo-blue.png" alt="">
                        </div>
                        <div class="footer-intro_ttl-txt">
                            <p>〒166-0001</p>
                            <p>東京都杉並区阿佐谷北7-3-1</p>
                        </div>
                    </div>

                    <div class="footer-intro_tell">
                        <a href="tel:0312345678">03-1234-5678</a>
                        <p>(年中無休 AM9:00〜PM22:00)</p>
                    </div>

                    <div class="footer-intro_btn">
                        <div class="booking-btn">
                            <a href="<?php echo home_url('/reservation/'); ?>" class="btn">
                                <span>WEB予約</span>
                            </a>
                        </div>
                        <div class="contact-btn">
                            <a href="<?php echo home_url('/contact/'); ?>" class="btn">
                                <span>お問い合わせ</span>
                            </a>
                        </div>
                    </div>

                    <div class="footer-timeschedule">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-sp.png" alt="診察時間">
                        </picture>
                    </div>
                </div>

                <div class="footer-map">
                    <div class="footer-map_wrap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12958.979292250246!2d139.6230926674193!3d35.707896594326634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1780676382490!5m2!1sja!2sjp"
                            width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <ul class="footer-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-nav',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new Footer_Nav_Walker(),
                ]);
                ?>
            </ul>

            <div id="js-pagetop" class="page-top" style="display: none;">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pagetop.png" alt="ページトップ画像">
                </a>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>©︎2020-2021 みなみ歯科クリニック</p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>