<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="span-17">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="post-title"><a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry span-14">
					<?php the_content(''); ?>
				</div>

				<div class="postmetadata-top span-3 last">
				  <?php $stoc = 1; ?>
				  <?php if ($stoc) { ?>
				    <div class="span-2">
				      <strong><?php echo yak_calc_price($post->ID); ?> HUF</strong>
				      <br/>
				      <?php echo $stoc ?> készleten
				      <br/>
				    </div>
				    <div class="span-1 last">
				      <!--
				      <form method="post" action="/index.php#buynow_button" name="buynow">
                <input type="hidden" value="<?php the_ID() ?>" name="buynow"/>
                <input type="hidden" value="6" name="category"/>
                <input type="hidden" value="p" name="buynow_param"/>
                <input type="hidden" value="55" name="page_id"/>
                <input id="addbutton" class="yak_button" type="image" src="/wp-content/themes/garlando/img/basket.gif">
              </form>
              -->
				    </div>
				    <div class="clear"></div>
				    <br/>
				  <?php } ?>
				  <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				  <?php the_time('Y F j') ?>
				  <br/>
				  <?php comments_popup_link('Nincs hozzászólás', '1 hozzászólás', '% hozzászólás'); ?>
				  <?php edit_post_link('Módositás', '<br/>', ''); ?>
				</div>

        <div class="clear"></div>

				<div class="postmetadata">
				  <div class="span-14">Kategóriák: <?php the_category(', ') ?><?php the_tags(' és ', ', ', ''); ?></div>
				  <div class="span-3 last"><a href="<?php the_permalink() ?>#more-<?php the_ID() ?>\">Részletek &raquo;</a></div>
				</div>

				<div class="clear"></div>
			</div>


		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Régebbi bejegyzések') ?></div>
			<div class="alignright"><?php previous_posts_link('Újabb bejegyzések &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Oooops!</h2>
		<p class="center">Sajnos a keresett bejegyzés nem található. Kérjük keressen rá.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

