<?php
/**
 * @package WordPress
 * @subpackage Tata_Theme
 * Template Name: Gallery
 */

get_header(); ?>


	<section id="middle">


		<div id="container">

                       <?php get_sidebar(); ?>



			<div id="content">

	

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'kubrick') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.', 'kubrick'), '<p>', '</p>'); ?>
	
	<?php // comments_template(); ?> 
	
	</div><!--content-->
        
        		</div><!-- #container-->

 

        
	</section><!-- #middle-->




<?php get_footer(); ?>
