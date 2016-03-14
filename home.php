<?php //home.php is the blog home ?>
<?php get_header();  ?>
<?php get_template_part('nav'); ?>
<section id="blogHome">
  <div class="blogWrapper">
    <div class="blogHome">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>
  </div> <!-- /.wrapper -->
  </section>
<?php get_footer(); ?>