<?php
/**
 * @package WordPress
 * @subpackage Tata_Theme
 * Template Name: Start
 */
include (TEMPLATEPATH . '/header2.php');
?>


<div id="langwrapper">

    <div id="logo">
        <a href="<?php bloginfo('home'); ?>"></a> 
    </div>

    <div id="langflag">
        <ul class="qtrans_language_chooser" id="qtranslate-chooser">
            <li class="lang-lv">
                <a href="http://tata.designtheme.info/lv/collection/" hreflang="lv" title="LV"><span>LV</span></a></li>
            <li class="lang-en active">
                <a href="http://tata.designtheme.info/en/collection/" hreflang="en" title="EN"><span>EN</span></a></li>
        </ul>
        <div class="qtrans_widget_end"></div>            
    </div>
</div>


<div class="slides">




    <img src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/start01.jpg"/>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/start02.jpg"/>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/start03.jpg"/>
</div><!-- end .slides-->




<?php
include (TEMPLATEPATH . '/footer2.php');
?>

