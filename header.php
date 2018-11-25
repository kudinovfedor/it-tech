<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="row header-row d-flex flex-wrap align-items-center">
                <div class="col-sm-6 col-lg-3 header-logo">
                    <div class="logo">
                        <?php
                        $desc = sprintf('<span class="logo-desc">%s</span>', get_bloginfo('description'));

                        if (has_custom_logo()) {

                            the_custom_logo();
                            echo $desc;

                        } else {

                            $file = get_template_directory_uri() . '/assets/img/logo.png';

                            $img = sprintf('<img class="logo-img" src="%s" alt="%s">', esc_url($file), get_bloginfo('name'));

                            $link = sprintf('<a class="logo-link" href="%s">%s</a>', esc_url(home_url('/')), $img);

                            $span = sprintf('<span class="logo-link">%s</span>', $img);

                            $html = is_front_page() ? $span : $link;

                            $html .= $desc;

                            echo $html;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 header-btn text-right">
                    <button type="button" class="button-medium <?php the_lang_class('js-call-back'); ?>">
                        <?php _e('Free consultation', 'brainworks'); ?>
                    </button>
                </div>
                <div class="col-xs-12 col-lg-6 header-details">
                    <?php if (has_phones()) { ?>
                        <ul class="phone header-phones text-center">
                            <?php foreach (get_phones() as $phone) { ?>
                                <li class="phone-item">
                                    <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number"><?php echo esc_html(str_replace('+38 ', '', $phone)); ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <div class="header-info d-flex flex-wrap justify-content-between">
                        <span>Ремонт ноутбуків та смартфонів в Івано-Франківську</span>
                        <span>Працюємо без вихідних 9.00 - 19.00</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu">
            <div class="container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-nav',
                    'container' => false,
                    'menu_class' => 'menu-container',
                    'menu_id' => '',
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 3
                )); ?>
                <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            </div>
        </nav>
    <?php } ?>

    <div class="container js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="logo"><?php get_default_logo_link(); ?></div>
        </div>