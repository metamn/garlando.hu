<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="span-17">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">A keresés eredménye a <?php echo $s ?> kifejezésre</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Régebbi bejegyzések') ?></div>
			<div class="alignright"><?php previous_posts_link('Régebbi bejegyzések &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<br/>
				
				<div class="span-2 colborder">
          <?php image_extractor(true, 0, 100, 70, 'subcategory-image', '', '', ''); ?>
        </div>
        				
				<div class="span-11 last">
				  <?php the_time('j F Y') ?>
				  <br/>
				  <?php the_tags('Cimkék: ', ', ', '<br />'); ?> A <?php the_category(', ') ?> kategóriákban
				  <br/>
				  <?php comments_popup_link('Nincs hozzászólás &#187;', '1 hozzászólás &#187;', '% hozzászólás &#187;'); ?> <?php edit_post_link('Módositás', ' | ', ''); ?>
				</div>					
			</div>
      <div class="clear"></div>
      <br/>
            
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Régebbi bejegyzések') ?></div>
			<div class="alignright"><?php previous_posts_link('Régebbi bejegyzések &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Nem találtuk a keresett kifejezést.</h2>
		<p class="notice large">
		  Megkérjük ellenörizze a keresett kifejezést vagy használja az <a href="<?php echo get_option('home'); ?>/arhiva">arhivumot.</a>
		  <br/>
		  Köszönjük szépen!
		</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
