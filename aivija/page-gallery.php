<?php
/*
  
 Template Name: Gallery
 */

get_header(); ?>

<?php get_sidebar(); ?>

  <div class="content">


<ul class="subgallery">
<span style="display:none;"><?php the_ID(); ?></span>
<?php $parent = $post->ID; ?>
<?php
query_posts('posts_per_page=15&order=ASC&post_type=page&post_parent='.$parent);


 while (have_posts()) : the_post();
?>

<?php //$image_thumb = get_post_meta($post->ID, 'image-thumb', true); ?>
<li class="gallerybox"><div class="thumbox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></div><div class="titlebox"><?php the_title();?></div></a></li>


<?php endwhile; ?>
</ul>

	
	</div>
<?php include(TEMPLATEPATH."/sidebar2.php");?>


<?php get_footer(); ?>
