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
<?php if (is_front_page()) { ?>
<header id="mainHeader" style="background-image:url(<?php echo header_image()?>);">
  <div class="wrapper">
    <div class="header__title">
      <h1> 
        <span class="header__title--firstName"><?php the_field('header_first_name'); ?></span>
        <span class="header__title--surname"><?php the_field('header_surname');?></span>
      </h1>
    </div> <!--end header title -->
    <div class="header__arrow">
      <i class="fa fa-angle-down fa-4x"></i>
    </div>
  </div> <!-- end wrapper --> 
</header><!--end header-->

<?php } elseif (is_home()) { ?>

<header id="blogHeader" style="background-image:url(<?php echo header_image()?>);">
  <div class="wrapper">
    <div class="header__title">
      <h1 class="header__title--firstName">blog</h1>
    </div> <!--end header title -->
  </div> <!-- end wrapper --> 
</header><!--end header-->

<?php } else { ?>
<header id="elseHeader" style="background-image:url(<?php echo header_image()?>);">
  <div class="wrapper">
  </div>
</header>
<?php } ?>