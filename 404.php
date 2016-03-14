<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<section id="blogHome">
  <div class="blogWrapper">
    <div class="blogHome">
    <h1>Well, this is awkward...</h1>
    <p>Uh, I'm not sure what happened, but I can't find that thing you were looking for right now. Maybe... Maybe give it another shot?</p>
    <?php get_search_form(); ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>
  </div> <!-- /.wrapper -->
  </section>
<?php get_footer(); ?>