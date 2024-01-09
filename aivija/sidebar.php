<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

  <div class="sidebar1">


			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
//					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) ; 
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) ; 
?>

<?php 

// if($post->post_parent!=46 && $post->post_parent)   
if($post->post_parent)  
  $children = wp_list_pages("title_li=&depth=1&child_of=".$post->post_parent."&echo=0");  
  else  
  $children = wp_list_pages("title_li=&depth=1&child_of=".$post->ID."&echo=0");  
  if ($children) {   
echo '<div class="menutop"></div><ul class="nav">';
 echo $children;   
echo '</ul><div class="menubottom"></div>';
echo '<div class="sidelogo"></div>';
 }   

else {
echo '<div class="temrinalimage"></div>';
      }

?>

<!--
<div class="sidemenu">
    <ul class="nav">
      <li><a href="#">Первая ссылка</a></li>
      <li><a href="#">Вторая ссылка</a></li>
      <li><a href="#">Третья ссылка</a></li>
    </ul>
</div>
-->
<div class="thebeast"></div>

    <!-- end .sidebar1 --></div>


