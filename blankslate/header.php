<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    
<!-- Banner start-->
<?php
$upload_dir = wp_get_upload_dir(); // Get uploads directory information
$image_url = $upload_dir['baseurl'] . 'web_logo-1.jpg'; // Construct the image URL
?>

<div id="banner">
    <img src="http://u3aonline.com/wp-content/uploads/2024/04/web_logo-1.jpg" alt="Banner Image">
</div>
<!-- Banner end-->
<div id="branding">



<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
    <div class="login_signup_btn_main">
        <a href="/my-account/">Login / Signup </a>
    </div>
</nav>
</header>
<div id="container">
    <main id="content" role="main">


<!-- Call to action button -->
<div id="call-to-action">
    <a href="/my-account/" class="shine-button">Start with us now!</a>

</div>
<!-- End of Call to action button -->

