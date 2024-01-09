<?php
/**
 * @package WordPress
 * @subpackage Tata_Theme
 */
?>



<aside id="sideLeft">

    <div class="menublock">

        <?php
        wp_nav_menu(array(
            'menu' => 'sidebar',
            'before' => '<span>',
            'after' => '</span>',
            'link_before' => '<span>',
            'link_after' => '</span>'));
        ?>


    </div><!--.menublock-->



    <div class="inputmail">

        <?php 	/* Widgetized sidebar, if you have the plugin installed. */
//					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) ; 
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) ; 
?>

<!--
        <form name="newsletter" action="http://tata.cybermediaspot.com/wp-login.php?action=register" method="post">
            <label class="newsletter">Sing up for newsletter:</label>
            <input class="emailgo" type="text"   value="email" name="user_email">
            <input class="emailbutton" type="submit" value="OK" name="OK" />
        </form>-->



    </div><!--.inputmail-->




</aside><!-- #sideLeft -->



