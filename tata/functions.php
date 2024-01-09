<?php

// remove dashboard widgets
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    // For right now information widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    // For recent comments listing widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // For quick press widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    // For recent drafts widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // For Plugin information widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    // For incoming links information widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // For WordPress blog news widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // For other WordPress news widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

//
//add_filter( 'gallery_style' , 'my_gallery_filter' );
//function my_gallery_filter( $existing_code ) {
//	return;
//	//return $existing_code; // Uncomment the start of this line and remove/comment-out line above to fix(incase you're testing this code)
//}

function remove_gallery_css($css) {
    return preg_replace("#<style type='text/css'>(.*?)</style>#s", '', $css);
}

add_filter('gallery_style', 'remove_gallery_css');

// Remove wordpress from header
remove_action('wp_head', 'wp_generator');

// Add Custom Menu
add_action('init', 'register_custom_menu');

function register_custom_menu() {
    register_nav_menu('custom_menu', __('Custom Menu', 'tt'));
}

// Footer in Admin Panel
function remove_footer_admin() {
    echo "Designed by Eva Mežecka www.eva-studio.lv, Produced by Vladislav Sorokin vlad@vexedpoint.com";
}

add_filter('admin_footer_text', 'remove_footer_admin');


// Altternate view for protected pages
function fb_the_password_form() {
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $output = '<form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="protected">
	<p>' . __("My post is password protected. Please ask me for a password: nata.vaicahovska@inbox.lv", 'tata') . '</p>
	<p><label for="' . $label . '"><span class="passgo">' . __("Password", 'tata') . ' </span><input name="post_password" id="' . $label . '" type="password" size="20" /></label> <input class="passbutton" type="submit" name="Submit" value="' . esc_attr__("OK") . '" /></p>
	</form>';
    return $output;
}

add_filter('the_password_form', 'fb_the_password_form');
//
//register_sidebar( array(
//    'name' => 'JetPack in page',
//    'id' => 'jetpack-in-page',
//    'before_widget' => '<div id="jetpack">',
//    'after_widget' => '</div>',
//    'before_title' => '<h3>',
//    'after_title' => '</h3>'
//) );

//postimage


if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	        'name' => 'sidebar1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar(array(
	        'name' => 'sidebar2',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));

}

function postimage($size=medium,$num=1,$lighbox=1) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => $num,
		'order' => 'ASC',
//		'orderby' => 'menu_order ID',
                'post_status' => 'inherit',
                'post_mime_type' => 'image'
		)))
	{
		foreach( $images as $image ) {
//			$attachmenturl=the_permalink();   
                
                    $default_attr = array(
	'class'	=> "Thumb",
//	'alt'   => trim(strip_tags( get_post_meta($attachment_id, '_wp_attachment_image_alt', true) )),
//	'title' => trim(strip_tags( $attachment->post_title )),
                                        );
                    
			$attachmentimage=wp_get_attachment_image($image->ID, $size, '' , $default_attr );
//                  			$img_title = $image->post_title;
//                                        $img_desc = $image->post_excerpt;
                     
			if ($size != "full"){
//				echo '<a href="'.$attachmenturl.'" rel="lightbox" title="'.$img_desc.'">'.$attachmentimage.'</a>'.$img_title.'';
//                            echo '<a href="'.$attachmenturl.'">'.$attachmentimage.'</a>';
                            ?>

 <div class="gallery">
<dl class="gallery-item">
			<dt class="gallery-icon">
<a class="" href="<?php the_permalink(); ?>"><?php echo $attachmentimage; ?></a>

	</dt>
		
<div class="album_title">
<h4><a class="ngg-album-desc" title="<?php the_title();?>" href="<?php the_permalink();?>" ><?php the_title();?></a></h4>
</div><!--.album_title-->
</dl>

           
             </div>

<?php
} else {
//				echo '<img src="'.$attachmenturl.'">';
			}
		}
	} else {
//		echo "No Image";
	}
}

?>
