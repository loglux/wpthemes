<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


	<section id="middle">


		<div id="container">

                       <?php get_sidebar(); ?>



			<div id="content">

	
<?php $parent = $post->ID; ?>
     
    <div class="entry">   
    
      <div class="ngg-albumoverview">	     
          
<?php
query_posts('orderby=menu_order&posts_per_page=14&order=ASC&post_type=page&post_parent='.$parent);
 while (have_posts()) : the_post();
?>

   
			    
<?php //$image_thumb = get_post_meta($post->ID, 'image-thumb', true); ?>
    
         <?php postimage('thumbnail'); 
//          echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
          
          ?>  

        
    



<?php endwhile; ?>
            
                   <div class="ngg-clear"></div>
 </div><!-- .ngg-albumoverview -->   
    </div>
	
	</div><!--content-->
        
        		</div><!-- #container-->

 

        
	</section><!-- #middle-->




<?php get_footer(); ?>
