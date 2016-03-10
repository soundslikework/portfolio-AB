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
  <!--Masonry thingie -->
    <div class="button-group filter-button-group">
      <button data-filter="*">show all</button>
      <button data-filter=".html">Layout & Style</button>
      <button data-filter=".js">Interactive</button>
      <button data-filter=".dogs">Wordpress</button>
    </div>
    <div class="grid">
    <div class="grid-sizer"></div>
      <?php
        $portCounter = 0;  
        $portQuery = new WP_Query(array( 
        'post_type' => 'portfolioitem',
        'port_order' => 'ASC' 
        )); 
        ?>
      <?php if ($portQuery->have_posts()): ?>
        <?php while ($portQuery->have_posts()): ?>
        <?php  $portQuery->the_post(); ?>
        <?php if ($portCounter === 0 || $portCounter === 3 || $portCounter === 4) {?>
          <div class="grid-item grid-item--width2 port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
            <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>"> 
              <a href="<?php the_permalink();?>"></a>
            </div>
            <div class="gridbottom">
              <p class="gridbottom__left"><?php the_field('portname'); ?></p>
              <p class="gridbottom__right"><?php the_field('tags'); ?></p>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
          </div>
          <?php  } else { ?>
            <div class="grid-item port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
              <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>"> 
                <a href="<?php the_permalink();?>"></a>
              </div>
              <div class="gridbottom">
                <p class="gridbottom__left"><?php the_field('portname'); ?></p>
                <p class="gridbottom__right"><?php the_field('porttags'); ?></p>
                <?php $portCounter = $portCounter + 1; ?>
              </div>
            </div>
          <?php  }?>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif;?>
    </div>
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