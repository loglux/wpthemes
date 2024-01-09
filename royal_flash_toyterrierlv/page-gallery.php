<?php
/*
  
 Template Name: Gallery

 */

get_header(); ?>

<?php // get_sidebar(); ?>

	<div id="content">
	<div id="main">
<?php /* if (have_posts()) : while (have_posts()) : the_post(); 

the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'royal_flash') . '</p>');

endwhile; 

endif;  */

?>


<ul class="subgallery">




<?php $parent = $post->ID; ?>
<?php
query_posts('posts_per_page=15&order=ASC&post_type=page&post_parent='.$parent);


 while (have_posts()) : the_post();

	


?>

<?php //$image_thumb = get_post_meta($post->ID, 'image-thumb', true); ?>

<?php if ( get_post_meta($post->ID, 'thumb', true) ) : ?>
    <a href="<?php the_permalink() ?>" rel="bookmark">
        <img class="thumb" src="<?php echo get_post_meta($post->ID, 'thumb', true) ?>" alt="<?php // the_title(); ?>" />
    </a>
<?php endif; ?>




<li class="gallerybox">



<div class="<?php 

if ( get_post_meta($post->ID, 'thumbox_class_check', 'on') ) : 

echo  'ch_thumbox';


else: echo 'thumbox'; 

     
endif; 

?>">

<a href="<?php the_permalink(); ?>">

<div class="titlebox"><?php the_title();?></div><!-- .titlebox -->



<?php //the_post_thumbnail('thumbnail', array('class' => 'gallery_preview')); ?>
<?php the_post_thumbnail('thumbnail', array('class' => 'gallery_preview', 'alt' => null, 'title' => null)); ?>

</a>

</div><!-- .thumbox -->

<!--
<div class="bottombox"><?php // the_title();?></div>
-->
<!-- .bottombox -->

</li><!-- li.gallerybox -->


<?php endwhile; ?>
</ul><!-- ul.subgallery -->

	
	
<?php // include(TEMPLATEPATH."/sidebar2.php");?>



	</div><!-- #main-->
	</div><!-- #content-->


</div><!-- #wrapper -->

<?php  get_footer(); ?>

