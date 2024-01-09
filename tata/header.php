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
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_enqueue_script("jquery"); ?>
        <?php // if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <?php wp_head(); ?>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
                <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>


<!--        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('ul.menu ul').each(function(i) { //Проверить все подменю
                    if (jQuery.cookie('submenuMark-' + i)) {  //Если информация о подменю сохранена в куках
                        jQuery(this).show().prev().removeClass('collapsed').addClass('expanded'); //Показать их 
                    }
                    else {
                        jQuery(this).hide().prev().removeClass('expanded').addClass('collapsed'); //Иначе скрыть
                    }
                    jQuery(this).prev().addClass('collapsible').click(function() { //Присоединить обработчик события
                        var this_i = jQuery('ul.menu ul').index(jQuery(this).next()); //Получить индекс щёлкнутого подменю
                        if (jQuery(this).next().css('display') == 'none') {

                            //Когда открыто подменю, свернуть остальные подменю
                            jQuery(this).parent('li').parent('ul').find('ul').each(function(j) {
                                if (j != this_i) {
                                    jQuery(this).slideUp(200, function () {
                                        jQuery(this).prev().removeClass('expanded').addClass('collapsed');
                                        cookieDel(jQuery('ul.menu ul').index(jQuery(this)));
                                    });
                                }
                            });
                            //Конец блока сворачивания остальных подменю


                            jQuery(this).next().slideDown(200, function () { //Показать подменю
                                jQuery(this).prev().removeClass('collapsed').addClass('expanded');
                                cookieSet(this_i);
                            });
                        }
                        else {
                            jQuery(this).next().slideUp(200, function () { //Спрятать подменю
                                jQuery(this).prev().removeClass('expanded').addClass('collapsed');
                                cookieDel(this_i);
                                jQuery(this).find('ul').each(function() {
                                    jQuery(this).hide(0, cookieDel(jQuery('ul.menu ul').index(jQuery(this)))).prev().removeClass('expanded').addClass('collapsed');
                                });
                            });
                        }
                        return false; //Не следовать по ссылке; true - следовать 
                    });
                });
            });

            function cookieSet(index) {
                jQuery.cookie('submenuMark-' + index, 'opened', {expires: null, path: '/'}); //Поставить куку "подменю раскрыто"
            }

            function cookieDel(index) {
//                jQuery.cookie('submenuMark-' + index, null, {expires: null, path: '/'}); //Удалить куку "подменю раскрыто"
            }
        </script>-->
<!--<script>
jQuery(document).ready(function() {
  jQuery('div#menu-sidbar-container>ul>li>a').click(function() {
    if (jQuery(this).parent().find('ul').length) {
      jQuery(this).parent().find('ul').slideToggle(200);				
      return false;
    }
  });
});
</script>-->

        <!--проверка-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.form.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/additional-methods.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
	
                jQuery("#ss-form").validate({meta: "validate"});
            });
        </script>

        <div style="display:none"> <!-- Registration -->
            <div id="register-form">
                <div class="title">
                    <h1>Register your Account</h1>
                    <span>Sign Up with us and Enjoy!</span>
                </div>
                <form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
                    <input type="text" name="user_login" value="Username" id="user_login" class="input" />
                    <input type="text" name="user_email" value="<?php echo $_POST['user_email']; ?>" id="user_email" class="input"  />
                    <?php do_action('register_form'); ?>
                    <input type="submit" value="Register" id="register" />
                    <hr />
                    <p class="statement">A password will be e-mailed to you.</p>
                </form>
            </div>
        </div><!-- /Registration -->


    </head>


    <body>

        <div id="wrapper">
            <div id="justify">
            <header id="header">

                <div id="headtitle">	<h1><a href="<?php echo get_option('home'); ?>/"><?php // bloginfo('name');   ?></a></h1>
                    <div id="logo">
                        <a href="<?php bloginfo('home'); ?>"></a> 
                    </div>
                </div>
                <!--.headtitle-->

                <div class="description"><?php // bloginfo('description');   ?></div>

            </header><!-- #header-->

