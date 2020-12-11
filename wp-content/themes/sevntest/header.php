<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevntest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <header class="header-w-bg">
            <nav class="nav">
                <div class="logo">
                    <h3><?php the_field('logo'); ?></h3>
                </div>
                <div class="reference">
                    <a class="reference-item" href="#"><?php the_field('link1'); ?></a>
                    <a class="reference-item" href="#"><?php the_field('link2'); ?></a>
                    <a class="reference-item" href="#"><?php the_field('link3'); ?></a>
                </div>
                <div class="contact">
                    <a class="call" href="">
                        <span class="call-text"><?php the_field('contact_phone'); ?></span>
                    </a>
                </div>
            </nav>
            <div class="header-title">
                <h1><?php the_field('header_title'); ?></h1>
                <p><?php the_field('header_subtitle'); ?></p>
            </div>
        </header><!-- #masthead -->
