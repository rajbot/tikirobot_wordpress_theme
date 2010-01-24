<?php
/*
Template Name: StaticPage
*/
get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="entry">
			<h2 class="entrytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p class="entryinfo">posted by <strong><?php the_author_posts_link('idmode'); ?></strong> on <?php the_time('F jS, Y') ?> &nbsp;  <!--(<strong><?php 
						$comments_img_link = '<img src="' . get_stylesheet_directory_uri() . '/images/comments.gif"  title="comments" alt="*" />';
						comments_popup_link('0 Comments', '1 Comment', '% Comments'); 
					?></strong>)--></p>
			<div class="entrybody">
				<?php the_content(__('(more...)')); ?>
			 <p class="comments_link">
Filed under: <?php the_category(', ') ?> |
<?php edit_post_link('edit', '', ' | '); ?>  
					<?php 
						$comments_img_link = '<img src="' . get_stylesheet_directory_uri() . '/images/comments.gif"  title="comments" alt="*" />';
						comments_popup_link('0 Comments', ' 1 Comment', ' % Comments'); 
					?>
<br>
<small><?php the_tags('Tagged: ', ' , ' , ''); ?></small>
				</p> 
			</div>
</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div>
</div><!-- The main content column ends  -->

<div id="sidebar-left">	
	<div id="twitterings">
	<h2> Twittering</h2>

    <script type="text/javascript" src="http://tikirobot.net/twitter/"></script>	
    
	</div>

    
	<?php if (function_exists('get_recent_comments')) { ?>
   <h2><?php _e('Commenting'); ?></h2>
        <ul class="recent-comments">
        <?php get_recent_comments(); ?>

        </ul>
  
   <?php } ?>   
 
</div>
</div><!-- container ends  -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
