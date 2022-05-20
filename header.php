<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cybervalue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <title>CYBER VALUE</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>assets/images/common/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/assets/css/import.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">

        <header class="header-row">
            <div class="header-logo">
                <h1><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_logo.png" alt="CYBER_VALUE"></a></h1>
            </div>
            <div class="header-nav">
                <?php wp_nav_menu(array('theme_location'=>'primary'))?>
                <div class="header-contact">
                    <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="contact-gmail">お問い合わせ</a>
                    <a href="tel:03-6914-2718" class="contact-phone cmn-contactbtn">03-6914-2718</a>
                </div>
            </div>
            <button class="menu-ico sp">
                <span class="hamburger-line"></span>
            </button>
        </header>