<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="blogHeader" style="background-image:url(<?php echo header_image()?>);">
  <div class="wrapper">
    <div class="header__title">
    <div class="header__title--box">
      <h1 class="header__title--firstName">
        Adam Brady
    </h1>
      <h1 class="header__title--surname">
        Blog
    </h1>
    </div> <!--end title box -->
    </div> <!--end header title -->
  </div> <!-- end wrapper --> 
</div><!--end header-->
