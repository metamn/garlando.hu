<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="span-17">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Bejegyzések a &#8216;<?php single_cat_title(); ?>&#8217; kategóriából</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">&#8216;<?php single_tag_title(); ?>&#8217; cimkével jelzett bejegyzések</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php the_time('F jS, Y'); ?> napi bejegyzések</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php the_time('F, Y'); ?> havi bejegyzések</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php the_time('Y'); ?> évi bejegyzések</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php the_author(); ?> bejegyzései</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog arhivum</h2>
 	  <?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Régebbi bejegyzések') ?></div>
			<div class="alignright"><?php previous_posts_link('Újabb bejegyzések &raquo;') ?></div>
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
			<div class="alignright"><?php previous_posts_link('Újabb bejegyzések &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Ooops, jelenleg nincs bejegyzés a %s kategóriában.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Oops, ezen az időponton nem született bejegyzés.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Ooops, %s még nem jegyzett semmit.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Nem találtunk egy bejegyzést sem.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
