<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="span-17">

<?php get_search_form(); ?>


<h2>Kategóriák</h2>
	<ul>
		 <?php wp_list_categories('show_count=1&feed=RSS&feed_image=http://garlando.hu/wp-includes/images/rss.png'); ?>
	</ul>

<h2>Időrend</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Szerzők</h2>
	<ul>
		<?php wp_list_authors('exclude_admin=0&optioncount=1&feed=RSS&feed_image=http://garlando.hu/wp-includes/images/rss.png'); ?>
	</ul>

<h2>Cimkék</h2>
	<ul>
		<?php wp_tag_cloud(); ?>
	</ul>


<hr/>
<p class="large notice">
Ha nem találja amit keresett használja a jobb felső sarokban a gyorskeresőt.
<br/>
Köszönjük szépen.
</p>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
