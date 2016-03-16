<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<div class="portfolioSItem">
  <div class="wrapper wrapper__portItem">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="portfolioSItem__container portfolioitem-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="portfolioSItem__title"><?php the_title(); ?></h1>
        <div class="portfolioSItem__image">
          <img src="<?php the_field('portimg'); ?>">
        </div>
        <div class="portfolioSItem__content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
        </div><!-- .entry-content -->
        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
        </div><!-- #post-## -->

    <div class="portfolioSItem__sidebar">
      <h3>Languages Used</h3>
      <ul class="langList">
        <?php while (has_sub_field('sidebartags')) {?>
        <li>
          <?php the_sub_field('sidebartagstag');?>
        </li>
        <?php } ?>
      </ul>
      <?php if (get_field('gitlink')) { ?>
      <a class="gitLink" href="<?php the_field('gitlink');?>">Check it out on gitHub!</a>
     <?php } ?>
     <a class="viewLink" href="<?php the_field('porturl');?>" target="_blank">See Live</a>
    </div><!-- end portfolio sidebar -->
    </div> <!-- /.content -->
  <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->

<?php get_footer(); ?>