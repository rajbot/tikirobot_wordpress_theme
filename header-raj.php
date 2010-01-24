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
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
		/******************************************************************* 
			Show link pointer images for external sites
		*******************************************************************/

		.entrybody a[href^="http:"] {
			background: inherit;
			padding-right: 0px;
		}
		.entrybody a:hover[href^=;http:"] {
			background: inherit;
			padding-right: 0px;
		}

		/* This avoids the icon being shown on internal links.*/
		.entrybody a[href^="http://<?php echo $_SERVER['HTTP_HOST']; ?>"],
		.entrybody a[href^="http://www.<?php echo $_SERVER['HTTP_HOST']; ?>"] {
			background: inherit;
			padding-right: 0px;
		}
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>

<script type="text/javascript">
function initTiki() {
	var rajScript = document.createElement("script");
	rajScript.setAttribute("type", "text/javascript");
	rajScript.setAttribute("src", 'http://www.twitter.com/t/status/user_timeline/6760?count=1&named_obj');
	rajScript.onload=function() {
		document.getElementById('my_twitter_status_raj').innerHTML = Twitter.posts[0].text;
        document.getElementById('my_twitter_status_time_raj').innerHTML = Twitter.posts[0].relative_created_at;
	};
    document.getElementsByTagName('head')[0].appendChild(rajScript);

	var mayScript = document.createElement("script");
	mayScript.setAttribute("type", "text/javascript");
	mayScript.setAttribute("src", 'http://www.twitter.com/t/status/user_timeline/781?count=1&named_obj');
	mayScript.onload=function() {
		document.getElementById('my_twitter_status_may').innerHTML = Twitter.posts[0].text;
        document.getElementById('my_twitter_status_time_may').innerHTML = Twitter.posts[0].relative_created_at;
	};
    document.getElementsByTagName('head')[0].appendChild(mayScript);

	var peliomScript = document.createElement("script");
	peliomScript.setAttribute("type", "text/javascript");
	peliomScript.setAttribute("src", 'http://www.twitter.com/t/status/user_timeline/5910?count=1&named_obj');
	peliomScript.onload=function() {
		document.getElementById('my_twitter_status_peliom').innerHTML = Twitter.posts[0].text;
		document.getElementById('my_twitter_status_time_peliom').innerHTML = Twitter.posts[0].relative_created_at;
	};
    document.getElementsByTagName('head')[0].appendChild(peliomScript);

}
</script>

</head>

<body id="home" class="log" onload="initTiki();">
<!-- The header begins  -->
		<div id="header">
			<a href="/wp"><img align="left" src="/wp/wp-content/themes/gentle_calm/images/tikipineapple.png" width="486" height="171"></a>

<table>

<!-- //begin peliom's twittering -->
<tr>
<td width="100%" valign="top">

<div class="twitter">
<strong><a href="http://twitter.com/jessehammons?all_updates=true">peliom</a></strong>: <span id="my_twitter_status_peliom"></span>
<p class="twitterMeta">sent via SMS, <span id="my_twitter_status_time_peliom"></span></p>
</div>

</td>
</tr>
<!-- //end peliom's twittering -->


<tr>

<td width="100%" valign="top">

<!-- //begin May's twittering -->
<div class="twitter">
<!--<h2>Twittering</h2>-->
<strong><a href="http://twitter.com/may?all_updates=true">may</a></strong>: <span id="my_twitter_status_may"></span>
<p class="twitterMeta">sent via SMS, <span id="my_twitter_status_time_may"></span></p>
</div>
<!-- //end May's twittering -->
</td>
</tr>


<tr>
<td width="100%" valign="top">

<!-- //begin rajbot's twittering -->
<div class="twitter">
<strong>rajbot</strong>: <span id="my_twitter_status_raj"></span><p class="twitterMeta"><a href="http://www.tikirobot.net/wp/2006/09/24/updating-twitter-via-ichat-or-aim-status-message/">sent via iChat</a>, <span id="my_twitter_status_time_raj"></span></p>
</div>
<!-- //end rajbot's twittering -->

</td>
</tr>


</table>


			<div align=left margin-left=400px id="subtitle">
				<!-- Here's the tagline  -->
				<!-- <?php bloginfo('description'); ?> -->
			</div>
		</div>
		<div id="headbar"></div>
		<!-- The header ends  -->
	<div id="container">
		<div id="maincol"><!-- The main content column begins  -->
			<div class="col">
