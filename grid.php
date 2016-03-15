    <div class="button-group filter-button-group">
      <button data-filter="*">show all</button>
      <button data-filter=".js">Interactive & API</button>
      <button data-filter=".html">Layout & Style</button>
      <button data-filter=".wp">Wordpress</button>
    </div>
    <div class="grid">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
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
        <?php if ($portCounter === 0) {?>
          <div class="grid-item grid-item--width3 port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
            <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>)"> 
            </div>
            <div class="gridbottom">
              <h4 class="gridbottom__left"><?php the_field('portname'); ?></h4>
              <p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <div class="gridbottom__right">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">Learn More</a>
                <a class="gridButton gridButton__see" target="_blank" href="<?php the_field('porturl');?>">See Live</a>
              </div>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
          </div>
        <?php } elseif ($portCounter === 2 || $portCounter === 3) {?>
          <div class="grid-item grid-item--width2 port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
            <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>)"> 
            </div>
            <div class="gridbottom">
              <h4 class="gridbottom__left"><?php the_field('portname'); ?></h4>
              <p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <div class="gridbottom__right">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">Learn More</a>
                <a class="gridButton gridButton__see" target="_blank" href="<?php the_field('porturl');?>">See Live</a>
              </div>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
          </div>
          <?php  } else { ?>
            <div class="grid-item grid-item__short port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
              <div class="gridtop gridtop__short" style="background-image:url(<?php echo the_field('portimg')?>)"> 
              </div>
            <div class="gridbottom gridbottom__short">
              <h4 class="gridbottom__left"><?php the_field('portname'); ?></h4>
              <p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <div class="gridbottom__right gridbottom__right--short">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">Learn More</a>
                <a class="gridButton gridButton__see" target="_blank" href="<?php the_field('porturl');?>">See Live</a>
              </div>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
            </div>
          <?php  }?>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif;?>
    </div>