<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package practice
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer">
		<?php
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        ?>
		    <p><i class="fa fa-copyright"></i>Copyright 2022 Kyle Washington <br> All Rights Reserved.</p>
			<i class="fa fa-github-alt"></i>
			<i class="fa fa-linkedin"></i>
			<i class="fa fa-wordpress"></i>
		    </div>
		<div class="footer"></div> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
