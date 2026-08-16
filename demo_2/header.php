<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <header id="header js-header" class="header">
            <div class="header-inner">

                <!-- header-logo -->
                <h1 class="header-logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/img/front-page/header-logo.svg" alt="">
                    </a>
                </h1>
                <!-- header-logo -->

                <!-- header-nav -->
                <nav class="header-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'header-nav',
                            'container' => '',
                            'menu_class' => 'header-nav_links'
                        )
                    );
                    ?>
                    <a href="<?php echo home_url('/download/'); ?>" class="header-btn1 header-nav_button">
                        <span class="header-btn1_txt button">資料ダウンロード</span>
                    </a>
                    <a href="<?php echo home_url('/contact/'); ?>" class="header-btn2 header-nav_button">
                        <span class="header-btn2_txt button">お問い合わせ</span>
                    </a>
                </nav>

                <!-- hamburger -->
                <div class="hamburger">
                    <button type="button" id="js-drawer-icon" class="drawer-icon">
                        <span class="drawer-icon_bar"></span>
                        <span class="drawer-icon_bar"></span>
                        <span class="drawer-icon_bar"></span>
                    </button>
                </div>
                <!-- hamburger -->
            </div>
        </header>
        <!-- header -->

        <!-- Drawer Content -->
        <div id="js-drawer-content" class="drawer-content">
            <nav class="drawer-content_menu" aria-label="ドロワーメニューナビゲーション">
                <?php
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'drawer-nav',
                        'container' => '',
                        'menu_class' => 'drawer-nav_links'
                    )
                );
                ?>
                <li class="drawer-btn1">
                    <a href="<?php echo home_url('/download/'); ?>" class="drawer-content_button">
                        <span class="drawer-btn1_txt button">資料ダウンロード</span>
                    </a>
                </li>
                <li class="drawer-btn2">
                    <a href="<?php echo home_url('/contact/'); ?>" class="drawer-content_button">
                        <span class="drawer-btn2_txt button">お問い合わせ</span>
                    </a>
                </li>
            </nav>
        </div>
        <!-- Drawer Content -->