<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cybervalue
 */

get_header();
?>
	<?php if (is_page('terms')) : ?>
		<section class="sec-mv sec-terms-mv">
			<div class="l-inner">
				<h2 class="mv-ttl"><span class="mvsub-ttl">TERMS</span>利用規約</h2>
			</div>
  	</section><!-- /.sec-mv -->
	<?php endif;  ?>
	<div class="content">
		<div id="terms">
			<section class="sec-terms l-inner">
				<?php while( have_posts() ): the_post() ;?>
					<?php the_content(); ?>
				<?php endwhile;?>
			</section>
		</div><!--terms-->
	</div><!--content-->

<?php
get_footer();
