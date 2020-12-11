<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevntest
 */

?>

		<footer>
            <div class="nav">
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
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>

</body>
</html>
