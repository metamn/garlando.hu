<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="span-17">

		<h2 class="center">Ooops! A keresett oldal nem található.</h2>
		<p class="notice large">Megkérjük ellenörizze a web cimet, vagy használja a keresőt és az <a href="<?php echo get_option('home'); ?>/arhiva">arhivumot.</a>
		  Köszönjük szépen!
		</p>	

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
