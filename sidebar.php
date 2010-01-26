<!-- begin sidebar -->
<div id="sidebar-right" >
<div id="top" ></div>
<div id="bg">
<?php
if ('/wp/' != $_SERVER[REQUEST_URI]) {
echo '
<!-- //Amazon Omikase ads -->
<div class="ads">

<h3>Stuff You Need </h3>

<div style="overflow:hidden;height=1px;" >
<div style="margin-top:-20px; margin-bottom:-130px;" >
<script type="text/javascript"><!--
 amazon_ad_tag = "tikirobot-20";  amazon_ad_width = "160";  amazon_ad_height = "600";  amazon_color_border = "61623E";  amazon_color_background = "E6E6DC";  amazon_color_link = "23537B";  amazon_color_price = "507642";  amazon_color_logo = "F3F4EC";  amazon_ad_logo = "hide";  amazon_ad_link_target = "new";  amazon_ad_price = "retail"; amazon_ad_border = "hide"; //--></script>
<script type="text/javascript" src="http://www.assoc-amazon.com/s/ads.js"></script>

<!-- //Amazon Omikase ads -->
</div>
</div>
</div>
';
}
?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>

<!-- Google CSE Search Box Begins -->
<h3>Search TikiRobot!</h3>
<form id="searchbox_000889352474200327076:cfuhwdy3ac4" action="http://www.google.com/cse">
  <input type="hidden" name="cx" value="000889352474200327076:cfuhwdy3ac4" />
  <input name="q" type="text" size="22" />
  <input class="button" type="submit" name="sa" value="Search" />
  <input type="hidden" name="cof" value="FORID:0" />
</form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_000889352474200327076%3Acfuhwdy3ac4"></script>
<!-- Google CSE Search Box Ends -->

		
		<ul id="linkslist">
		<?php get_links_list(); ?>
		<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>
		</ul>		


		<h3><?php _e('Categories'); ?></h3>
		<ul>
			<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
		</ul>

		<?php 
			if (function_exists('wp_theme_switcher')){ 
				echo "<h2>";
				_e("Themes");
				echo "</h2>";
				wp_theme_switcher(''); 
			}		
		?>



<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?><img align="top" width="30" src="/wp/wp-content/themes/gentle_calm/images/xml32.gif"></a>


<ul>
<li>
<script>utmx_section("ThreadlessSection")</script>
<strong><a href="/wp/threadless.html">Tees at Threadless!</a></strong>
</noscript>
</li>
</ul>

		<h3><?php _e('Top 200 Tags'); ?></h3>
		<?php wp_tag_cloud('smallest=5&largest=25&number=200'); ?>

		<h3><?php _e('Archives'); ?></h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>


</div>
</div>
<?php endif; ?>
<!-- end sidebar -->
</div>
<div class="clear"></div>

