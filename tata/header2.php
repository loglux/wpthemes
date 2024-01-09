<?php
/**
 * @package WordPress
 * @subpackage Tata_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blocks.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/media.css" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_enqueue_script("jquery"); ?>
        <?php // if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

        <?php wp_head(); ?>


        <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js'></script>

        <!--script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script-->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.slides').cycle({
                    fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
//                   transition_advanced: 1,
                    timeout:5000,
                    speed:1000,
                    delay:0,
//                    sync:1,
                    random:1,
                    pause:0,
                    pause_on_click:0,
                    action_advanced:0,
                    start_paused:0,
                    remember_slide:0
                    //     speedIn:  1000, 
                    //    speedOut: 1000,
                    //    sync:     999
                });
                    
                    
            });
        </script>




    </head>


    <body>

        <div id="wrapper">





