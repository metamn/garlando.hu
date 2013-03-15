<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Lider in mese de fotball / foosball si biliard" />
<meta name="keywords" content="masa, mese, foosball, biliard, darts, ping-pong, air hockey, mese fotbal, masa fotbal, mese biliard, masa biliard, mese ping pong, masa ping pong, masa air hockey, mese air hockey" />


<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>, <?php bloginfo('description'); ?></title>


<!-- blueprint -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/print.css" type="text/css" media="print">
<!--[if IE]>
<link rel=”stylesheet” href=”<?php bloginfo(’stylesheet_directory’); ?>/css/blueprint/ie.css” type=”text/css” media=”screen, projection”>
<![endif] -->

<!-- jQuery theme -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/custom-theme/jquery-ui-1.7.1.custom.css" type="text/css" media="screen, projection">


<!-- Garlando Theme -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!-- Wordpress -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- jQuery -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.7.1.custom.min.js"></script>


<script type="text/javascript">
	$(function() {
		$("#accordion").accordion({
		    active: false
		});
	});
</script>



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body>
<div class="container">


<div id="header">
  <div id="logo" class="span-17">
    <a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" class="header">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" name="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="logo"/>
      <br/>
      <span class="tagline"><?php bloginfo('description'); ?></span>
    </a>
  </div>


  <div id="shortmenu" class="span-7 last">
    <ul class="shortmenu">
        <li><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">Katalógus</a></li>
        <?php wp_list_pages('include=210,6,209&title_li='); ?>
    </ul>
    <?php get_search_form(); ?>
	</div>

	<div class="clear"></div>
</div>

