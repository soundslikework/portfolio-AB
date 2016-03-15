<?php get_header();  ?>
<?php get_template_part('nav'); ?>
<section id="about">
    <div class="wrapper">
        <h2 class="fpTitle">About Me</h2>

        <div class="aboutText">
          <div class="aboutLeft">
            <h4><?php the_field('about_text_left')?></h4>
          </div>
          <div class="aboutCenter">
            <p><?php the_field('about_text_center')?></p>
            <p><?php the_field('about_text_right')?> </p>
          </div>
      </div><!--end abouttext -->
          <ul class="aboutIcons">
          <?php while (has_sub_field('skills')) { ?>
            <li>
            <?php  the_sub_field('skilltype')?>
            <p><?php the_sub_field('skilltext') ?></p>
            </li>
          <?php }?>
        </ul>
    </div><!--end wrapper -->
</section>
<section id="folio">
<div class="wrapper">
  <h2 class="fpTitle">Portfolio</h2>
  <?php get_template_part('grid');?>
  </div>
</section>
<section id="blog">
<div class="wrapper">
  <h2 class="fpTitle">On The Blog</h2>
  <div class="fpBlog">
      <?php $postslist = get_posts('numberposts=5');
        $postCounter = 0;
          foreach ($postslist as $post) :
            setup_postdata($post); ?>
          <?php if($postCounter==1){echo '<div class="postContainer">';} ?>
        <article class="blogPost<?php if($postCounter==0) { echo ' first'; }?>">
              <div class="blogPost__content">
                <?php if($postCounter==0){?>
                <h3>Latest Post</h3>
                <?php };?>
                    <?php the_category();?>
                    <h3>
                      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
                  </h3>
                      <p><?php the_excerpt(); ?></p>
                      <p><?php hackeryou_continue_reading_link(); ?></p>
              </div>
                  <div class="blogPost__date">
                  <span class="blogPost__underline"></span>
                  <div class="blogPost__date--year"><p><?php the_time('j F')?></p></div>
              </div>
          </article>
          <?php if($postCounter == 4){echo '</div>';}?>
          <?php $postCounter++; ?>
      <?php endforeach ?>
      <?php wp_reset_postdata(); ?>
  </div>
  </div><!--end wrapper-->
</section>
<section id="profile">
<div class="wrapper">
<h2 class="fpTitle">Workflow</h2>

  <!--Highlight enthusiasm, willingness to learn. Use text setup from persona type -->
  <div class="profileText">
    <p><?php the_field('profile_text')?></p>
    <p>This week, I'm excited to be working on <?php the_field('this_week_im_excited')?></p>
  </div>
          <ul class="workflowIcons">
          <?php while (has_sub_field('devicons')) { ?>
            <li title="<?php the_sub_field('label');?>">
            <?php  the_sub_field('class');?>
            </li>
          <?php }?>
        </ul>
</div> <!-- /.wrapper -->
</section>

<?php get_footer(); ?>