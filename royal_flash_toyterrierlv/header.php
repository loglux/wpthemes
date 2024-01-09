<?php
/**
 * @package WordPress
 * @subpackage Royal_Flash_Theme
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />	

<title><?php // bloginfo('name'); ?> 
    <?php wp_title(); ?></title>

	<meta name="keywords" content="" />
	<meta name="description" content="Viens no vismazāko suņu šķirnēm, garspalvainais krievu toiterjers" />
	<meta name="google-site-verification" content="fRvuWDkabf31YwRYtlmwY-mapSGUld6HcS3yLqCeKDg" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->




<script type="text/javascript">

jQuery().ready(function() {

jQuery('.spoiler').hide();

jQuery('.spoiler-title').click(function(){
    jQuery(this).next().slideToggle("normal");
});


		});


</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/form/jquery.validate.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/form/additional-methods.js"></script>
<?php if(qtrans_getLanguage()=='lv'): ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/form/messages_lv.js"></script>
<?php endif; ?>

<?php if(qtrans_getLanguage()=='ru'): ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/form/messages_ru.js"></script>
<?php endif; ?>


<script type="text/javascript">
jQuery(document).ready(function() {
	
	jQuery("#ss-form").validate({meta: "validate"});
});
</script>


</head>

<body>
<div id="wrapper">

	<header id="header">
    <div id="mainheader">
    <div id="leftdog">
    </div><!-- #leftdog-->
		<div id="middledog">
        <div id="flashtop">
        </div><!-- #flashtop-->
        <div id="flashmiddle">
        </div><!-- #flashmiddle-->
        <div id="flashbottom">
<div id="langflag">
 <?php echo qtrans_generateLanguageSelectCode('text'); ?>
</div>

        </div><!-- flashbottom-->
        </div><!-- #middledog-->
         <div id="rightdog">
    </div><!-- #rightdog-->
        </div><!-- #mainheader-->
	</header><!-- #header-->
<div id="menuwrapper">
<nav id="horizon">

<?php wp_nav_menu( array(
	'menu' => 'custom menu' ,
	'link_before' => '<span>' ,
	'link_after' => '</span>' ));

?>


</nav><!-- #horizon nav -->
</div><!-- #menuwrapper-->