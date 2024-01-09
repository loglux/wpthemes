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


	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>




<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php /*
*Этот код подключает скрипт comment-reply.js на статической странице или странице поста. 
*Скрипт выполняет простую функцию — перемещает форму добавления комментария под комментарий, у которого мы кликнули на ссылку «ответить».
*Отключаем
*/?>
<?php // if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 


<?php wp_head(); ?>

		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/sylvester.js"></script>
		<!--script type="text/javascript" src="<?php bloginfo('template_url'); ?>/transformie.js"></script-->


</head>


<body>

<div class="container">
  <div class="header">
<div id="langflag">
 <?php echo qtrans_generateLanguageSelectCode('image'); ?>
</div>
<div id="about" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=2&title_li='); ?></div>
<div id="garden" class="smartmenu  <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=19&title_li='); ?></div>
<div id="school" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=32&title_li='); ?></div>
<div id="training" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=34&title_li='); ?></div>
<div id="price" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=39&title_li='); ?></div>
<div id="gallery" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=46&title_li='); ?></div>
<div id="contacts" class="smartmenu <?php echo qtrans_getLanguage(); ?>"><?php wp_list_pages('include=42&title_li='); ?></div>

<!-- end .header --></div>




