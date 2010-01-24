<?php
/*
Template Name: StaticPage
*/
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry">
			<!-- <h2 class="entrydate"><?php the_date() ?></h2> -->
			<h2 class="entrytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="entrybody">
				<?php the_content(__('(more...)')); ?>
				<p class="comments_link">
					<?php 
						$comments_img_link = '<img src="' . get_stylesheet_directory_uri() . '/images/comments.gif"  title="comments" alt="*" />';
						comments_popup_link('No Comments', $comments_img_link . ' 1 Comment', $comments_img_link . ' % Comments'); 
					?>
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
	<div class="twitter">
	<strong><a href="http://twitter.com/peliom?all_updates=true">peliom</a></strong>: <span id="my_twitter_status_5910">><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_5910"></div>
	</div>

	<div class="twitter">
	<strong><a href="http://twitter.com/may?all_updates=true">may</a></strong>: <span id="my_twitter_status_781"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_781"></div>
	</div>
	
	<div class="twitter">
	<strong><a href="http://twitter.com/rajbot?all_updates=true">rajbot</a></strong>: <span id="my_twitter_status_6760"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_6760"></div>
	</div>

	<div class="twitter">
	<strong><a href="http://twitter.com/agentq?all_updates=true">Q</a></strong>: <span id="my_twitter_status_77883"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_77883"></div>
	</div>

	<div class="twitter">
	<strong><a href="http://twitter.com/bobslobster?all_updates=true">Bob</a></strong>: <span id="my_twitter_status_663433"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_663433"></div>
	</div>

	<div class="twitter">
	<strong><a href="http://twitter.com/mitchtwits?all_updates=true">Mitch</a></strong>: <span id="my_twitter_status_676083"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
	<div class="twitterMeta" id="my_twitter_status_time_676083"></div>
	</div>
	</div>

	<script type="text/javascript">
	initTiki();
	</script>

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
