<?php get_header();  ?>
<?php get_template_part('nav'); ?>
<section id="about">
    <div class="wrapper">
      <div class="aboutTop">
        <h2>About Me</h2>
        <ul class="aboutIcons">
          <?php while (has_sub_field('skills')) { ?>
            <li>
            <i class="fa fa-<?php  the_sub_field('skilltype')?>"></i>
            <p><?php the_sub_field('skilltext') ?></p>
            </li>
          <?php }?>
        </ul>
      </div><!--end abouttop -->
      <div class="aboutText">
        <div class="aboutLeft">
            <p><?php the_field('about_text_left')?></p>
        </div>
        <div class="aboutRight">
            <p><?php the_field('about_text_right')?> </p>
        </div>
      </div><!--end abouttext -->
    </div> <!-- /.wrapper -->
</section>
<section id="folio">
  <h2>Portfolio</h2>
  <!--Masonry folio -->
  <?php get_template_part('grid');?>
</section>
<section id="blog">
  <h2>My Blog</h2>
        <?php // Start the loop ?>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
</section>
<section id="profile">
<h2>Profile</h2>
  <!--Highlight enthusiasm, willingness to learn. Use text setup from persona type -->
  <p><?php the_field('profile_text') ?></p>
</section>

<?php get_footer(); ?>