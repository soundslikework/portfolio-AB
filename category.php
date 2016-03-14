<?php get_template_part('header-blog'); ?>
<?php get_template_part('nav'); ?>
<section id="blogHome">
  <div class="blogWrapper">
    <div class="blogHome">
      <h2>Category Archives: <?php single_cat_title(); ?></h2>
      <?php
        $category_description = category_description();
        if ( ! empty( $category_description ) )
          echo '' . $category_description . '';
         get_template_part( 'loop', 'category' );
        ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>
  </div> <!-- /.wrapper -->
  </section>


<?php get_footer(); ?>