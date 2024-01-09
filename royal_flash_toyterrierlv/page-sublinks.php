<?php
/**
 * @package WordPress
 * @subpackage Royal_Flash_Theme
Template Name: SubLinks
 */

get_header(); ?>
        <div id="empty"></div>
	<div id="content">
	
	<div id="main">
        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
			

<?php
  $children = wp_list_pages('title_li=&depth=1&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>


	<?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'royal_flash') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'royal_flash') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.', 'royal_flash'), '<p>', '</p>'); ?>
	
	<?php // comments_template(); ?> 


	</div><!-- #main-->
	</div><!-- #content-->


</div><!-- #wrapper -->

<?php  get_footer(); ?>