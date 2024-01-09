<?php
/**
 * @package WordPress
 * @subpackage Royal_Flash_Theme
 */
get_header();
?>

<div id="content">
    <div id="main">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="infoblock">

                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">


                        <div class="fotobar">
                            <?php
                            if (has_post_thumbnail()) {
                                $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" rel="lightbox">';
                                the_post_thumbnail('medium', array('class' => 'post-thumbnail'));
                                echo '</a>';
                            }
                            ?>
                        </div><!-- fotobar -->


                        <div class="textcolumn">
                            <!--
                              <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'royal_flash'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
                            -->	

                            <div class="newsdate"><div class="newsdatetext"><?php the_time(__('F jS, Y', 'royal_flash')) ?> <!-- by <?php the_author() ?> --></div></div>

                            <div class="entry">
                                <?php the_content(__('Read the rest of this entry &raquo;', 'royal_flash')); ?>
                            </div>

                            <p class="postmetadata"><?php // the_tags(__('Tags:', 'royal_flash') . ' ', ', ', '<br />');  ?> <?php // printf(__('Posted in %s', 'royal_flash'), get_the_category_list(', '));  ?> <!--|--> <?php edit_post_link(__('Edit', 'royal_flash'), '', ' | '); ?>  <?php // comments_popup_link(__('No Comments &#187;', 'royal_flash'), __('1 Comment &#187;', 'royal_flash'), __('% Comments &#187;', 'royal_flash'), '', __('Comments Closed', 'royal_flash') );  ?></p>
                        </div>

                    </div><!-- textcolumn -->
                </div><!-- infoblock -->

            <?php endwhile; ?>


            <div class="navigation">
                <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'royal_flash')) ?></div>
                <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'royal_flash')) ?></div>
            </div>

        <?php else : ?>

            <h2 class="center"><?php _e('Not Found', 'royal_flash'); ?></h2>
            <p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'royal_flash'); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>


    </div><!-- #main-->
</div><!-- #content-->


</div><!-- #wrapper -->

<?php get_footer(); ?>