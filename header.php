<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--  
Theme Name: RealSelf Trends
Description: Sarah Durkee made me do this.
Version: 1.0
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
-->

<title><?php get_my_title_tag(); ?></title>

<!-- Start Meta -->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Open Graph Meta for Facebook -->
<meta property="og:title" content="<?php get_my_title_tag(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'large'); ?>
<?php if ($fb_image) : ?>
<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
<?php endif; ?>
<meta property="og:type" content="<?php if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="article:publisher" content="https://www.facebook.com/premiumdw" />
<!-- End Open Graph Meta for Facebook -->

<!-- Begin Links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/icon-fonts/flaticon.css" type="text/css" media="all">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<!-- End Links -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts.js"></script>
<!-- End Scripts -->

<!-- Begin WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

<!-- Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-289597-16', 'auto');
  ga('send', 'pageview');
</script>
<!-- Start Google Analytics -->

</head>

<body <?php body_class(); ?>>

<!-- Begin Facebook Thing -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.2";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Thing -->

<!-- Begin Header -->
<div id="header">

    <!-- Begin Brand -->
    <div id="brand">
    <a href="http://www.realself.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-original-16px.png" alt="Link to Real Self Dot Com"></a>
    </div>
    <!-- End Brand -->
    
    <!-- Begin Social -->
    <div id="social">
    <ul id="social-items">
    <li><a href="https://www.facebook.com/Realself" target="_blank" class="flaticon-facebook3"></a></li>
    <li><a href="https://twitter.com/RealSelf" target="_blank" class="flaticon-social71"></a></li>
    <li><a href="https://www.linkedin.com/company/realself.com" target="_blank" class="flaticon-linkedin1"></a></li>
    </ul>
    </div>
    <!-- End Social -->
    
    <!-- Begin Logo -->
    <div id="logo">
    <a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-trends-40px.png" alt="RealSelf Trends"></a>
    </div>
    <!-- End Logo -->
    
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<div id="navigation">
<span id="search-toggle"><a id="search-toggle-open" class="flaticon-magnifying47" href="#"></a><a id="search-toggle-close" class="flaticon-close2" href="#"></a></span>
<?php /*wp_nav_menu( array( 'theme_location' => 'main-menu', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) );*/ ?>
</div>
<!-- End Navigation -->

<!-- Begin Search -->
<div id="search-modal">
<div id="search-modal-box">
<?php get_search_form(); ?>
</div>
</div>
<!-- End Search -->
