<?php get_header(); ?>

<div class="main">
  <div class="wrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="portfolioitem-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="portfolioitem-title"><?php the_title(); ?></h1>
            <img src="<?php the_field('portimg'); ?>">

          <div class="portfolioitem-content">
            <?php the_content(); ?>
            <?php the_field('portname'); ?>
            <?php the_field('porttags'); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="portfolioitem-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>