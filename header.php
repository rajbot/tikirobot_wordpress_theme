<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>

<META Name="revisit-after" Content="30 Days">
<META Name="Description" Content="a place for fun...">
<META Name="Keywords" Content="mai tais, blinky lights, ahoy, arrrr, tiki lifestyle, beats, doodles, cycling, osx, design">
<META Name="Author" Content="TikiRobot!">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?>, Mai Tais and Blinky Lights, Ahoy! <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="handheld">
		@import url( <?php echo get_bloginfo('stylesheet_directory').'/mobile.css'; ?> );
	</style>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<style type="text/css" media="screen">
		@import url( http://www.tikirobot.net/wp/wp-content/themes/gentle_calm/ChatBubble/ChatBubble-TR.css );
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>

<script type="text/javascript">
function twitterCallback(obj) {
	var id = obj[0].user.id;
	document.getElementById('my_twitter_status_' + id).innerHTML = obj[0].text;
	document.getElementById('my_twitter_status_time_' + id).innerHTML = 'sent ' + obj[0].created_at.slice(0,-11);

}

function twitterStatus(url) {
	var twitScript  = document.createElement("script");
	twitScript.setAttribute("type", "text/javascript");
	twitScript.setAttribute("src", url);
	document.getElementsByTagName('head')[0].appendChild(twitScript);
}

function initTiki() {
	twitterStatus('http://twitter.com/statuses/user_timeline/781.json?callback=twitterCallback&count=1');
//	twitterStatus('http://twitter.com/statuses/user_timeline/5910.json?callback=twitterCallback&count=1');
	twitterStatus('http://twitter.com/statuses/user_timeline/6760.json?callback=twitterCallback&count=1');
//	twitterStatus('http://twitter.com/statuses/user_timeline/77883.json?callback=twitterCallback&count=1');	
	twitterStatus('http://twitter.com/statuses/user_timeline/663433.json?callback=twitterCallback&count=1');
	twitterStatus('http://twitter.com/statuses/user_timeline/676083.json?callback=twitterCallback&count=1');
}

</script>

<script>
function utmx_section(){}
(function(){var k='0006883377',d=document,l=d.location,c=d.cookie;function f(n){
if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.indexOf(';',i);return c.substring(i+n.
length+1,j<0?c.length:j)}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash,
t=h.length>1||!xx||!xx.indexOf(k+':bypasscache');d.write('<sc'+'ript src="'+
'http'+(l.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com'
+'/siteopt.js?utmxkey='+k+'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+(t?'&utmxtime='
+new Date().valueOf():'')+(h?'&utmxhash='+h.substr(1):'')+
'" type="text/javascript" charset="utf-8"></sc'+'ript>')})();
</script>

<!-- Start Quantcast tag -->
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<script type="text/javascript">_qacct="p-1007CvrNR0ui2";quantserve();</script>
<noscript>
<a href="http://www.quantcast.com/p-1007CvrNR0ui2" target="_blank"><img src="http://pixel.quantserve.com/pixel/p-1007CvrNR0ui2.gif" style="display: none" border="0" height="1" width="1" alt="Quantcast"/></a>
</noscript>
<!-- End Quantcast tag -->


</head>

<body id="home" class="log">
<div id="container">
<!--
<div id="sidebar-left">	
	<div id="twitterings">
	<h2> Twittering</h2>

	<div class="twitter">
	<strong><a href="http://twitter.com/peliom?all_updates=true">peliom</a></strong>: <span id="my_twitter_status_5910"><img src="http://tikirobot.net/wp/spinner.gif" valign="middle" width="15" height="15"></span>
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
-->
<div id="main">


<!-- The header begins  -->
		<div id="header">
			<a href="/wp"><img src="http://www.tikirobot.net/wp/wp-content/uploads/2007/12/tikipineapple.gif" width="486" height="171"></a>

			<div id="subtitle">
				<!-- Here's the tagline  -->
				<?php bloginfo('description'); ?> 
			</div>
		</div>
		<!-- <div id="headbar"></div> -->
		<!-- The header ends  -->
<div class="clear"></div>


		<div id="maincol"><!-- The main content column begins  -->
			<div class="col">
