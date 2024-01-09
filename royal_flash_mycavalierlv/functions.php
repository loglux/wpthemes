<?php

load_theme_textdomain( 'royal_flash', get_template_directory() . '/languages' );

add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}


add_theme_support('post-thumbnails');


add_action ('add_meta_boxes', 'thumbox_class_add');

	function thumbox_class_add()
	                   {

// if (is_page_template ( 'page-gallery.php' ) )

add_meta_box('thumbox_class_id', 'Champion', 'thumbox_class_box', 'page', 'side', 'high');
	
	                    }


function thumbox_class_box()
	{

	 	global $post;
		
	$values = get_post_custom ($post->ID);


	$check = isset( $values['thumbox_class_check'] ) ? esc_attr( $values['thumbox_class_check'][0] ) : '';

	
	wp_nonce_field( 'ch_meta_box_nonce', 'meta_box_nonce' );


	
	        ?>

              	<input type="checkbox" id="thumbox_class_check" name="thumbox_class_check" 

                                       <?php  checked($check, 'on'); ?>/>
          

 	<label for="thumbox_class_check">Check Champion</label>  

<?php

	}



add_action ('save_post', 'thumbox_class_save');

	function thumbox_class_save($post_id)

		{

    // Bail if we're doing an auto save  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return; 
 
    // if our nonce isn't there, or we can't verify it, bail 
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'ch_meta_box_nonce' ) ) return; 
 
    // if our current user can't edit this post, bail  
    if( !current_user_can( 'edit_post' ) ) return;  
  
    // now we can actually save the data  
    $allowed = array(  
        'a' => array( // on allow a tags  
            'href' => array() // and those anchors can only have href attribute  
        )  
    );  


		
   $chk = isset( $_POST['thumbox_class_check'] ) && $_POST['thumbox_class_check'] ? 'on' : '';  
    update_post_meta( $post_id, 'thumbox_class_check', $chk );  


  //  if( isset( $_POST['thumbox_class_check'] ) && $_POST['thumbox_class_check'] ? 'on' : '')  
    //    update_post_meta( $post_id, 'thumbox_class_check', esc_attr( $_POST['thumbox_class_check'] ) );

    // update_post_meta($post_id, 'thumbox_class_check');






	        }





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
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// Remove Admin Menus
function remove_menus () {
global $menu;
		$restricted = array(
//__('Dashboard'), 
__('Links'), 
//__('Plugins'), 
//__('Tools'), 
__('Comments'), __('Users'), );
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
}

add_action('admin_menu', 'remove_menus');

// Add tags [spoiler][/spoiler]
function hyper_spoiler($atts, $content) {
if (!isset($atts[name])) {$sp_name = 'Spoiler';}
else {$sp_name = $atts[name];}
return '<div class="spoiler-wrap">
<div class="spoiler-title">'.$sp_name.'</div>
<div class="spoiler">'.$content.'</div>
</div>';}
add_shortcode('spoiler', 'hyper_spoiler');

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');
// The End of Disable support for comments and trackbacks in post types

?>