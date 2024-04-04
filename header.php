<?php date_default_timezone_set("PRC");?>
<!doctype html>
<html <?php language_attributes();?> id="emoji">
<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<?php wp_head();?>
	<meta property="og:site_name" content="<?php bloginfo('name');?> · <?php bloginfo('description');?>"/>
	<meta property="og:locale" content="<?php bloginfo('language');?>"/>
	<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/jquery/3.7.0/jquery.min.js"></script>
	<script>var dark='<i class="fa-solid fa-moon"></i>',light='<i class="fa-solid fa-lightbulb"></i>',auto='<i class="fa-solid fa-circle-half-stroke"></i>',mode=localStorage.getItem("darkMode"),toggler="dark-toggler";$(function(){let content=document.getElementById("emoji").innerHTML, emoji=content.match(/\p{Emoji_Presentation}/gu);for(emoji=Array.from(new Set(emoji)),emo=0;emo<emoji.length;emo++){content=content.replaceAll(emoji[emo],"<emoji>"+emoji[emo]+"</emoji>");document.getElementById("emoji").innerHTML=content.replaceAll("</emoji><emoji>","")};"on"==mode?document.getElementById(toggler).innerHTML=light:"off"==mode?(document.getElementById(toggler).innerHTML=dark,$("html").addClass("dark-mode")):(document.getElementById(toggler).innerHTML=auto,$("html").addClass("auto")),$("#dark-toggler").click(function(){mode=localStorage.getItem("darkMode"),$("html").addClass("toggler"),"on"==mode?($("html").toggleClass("dark-mode"),document.getElementById(toggler).innerHTML=dark,localStorage.setItem("darkMode","off")):"off"==mode?($("html").toggleClass("dark-mode auto"),document.getElementById(toggler).innerHTML=auto,localStorage.setItem("darkMode","auto")):($("html").toggleClass("auto"),document.getElementById(toggler).innerHTML=light,localStorage.setItem("darkMode","on"))})})</script>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail()):?>
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
			<div class="site-featured-image">
				<?php twentynineteen_post_thumbnail(); the_post(); $discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; $classes = 'entry-header'; if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) { $classes = 'entry-header has-discussion'; }?>
				<div class="<?php echo $classes; ?>">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</div>
				<?php rewind_posts(); ?>
			</div>
		</header>
		<?php endif; ?>