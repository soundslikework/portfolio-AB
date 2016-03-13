    <div class="button-group filter-button-group">
      <button data-filter="*">show all</button>
      <button data-filter=".html">Layout & Style</button>
      <button data-filter=".js">Interactive</button>
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
            <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>"> 
            </div>
            <div class="gridbottom">
              <p class="gridbottom__left"><?php the_field('portname'); ?></p>
              <p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <p class="gridbottom__right">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">More About This</a>
                <a class="gridButton gridButton__see" href="http://google.com">See Live</a>
              </p>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
          </div>
        <?php } elseif ($portCounter === 2 || $portCounter === 3) {?>
          <div class="grid-item grid-item--width2 port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
            <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>"> 
            </div>
            <div class="gridbottom">
              <p class="gridbottom__left"><?php the_field('portname'); ?></p><p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <p class="gridbottom__right">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">More About This</a>
                <a class="gridButton gridButton__see" href="http://google.com">See Live</a>
              </p>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
          </div>
          <?php  } else { ?>
            <div class="grid-item port-<?php echo $portCounter ?> <?php the_field('porttags') ?>">
              <div class="gridtop" style="background-image:url(<?php echo the_field('portimg')?>"> 
              </div>
            <div class="gridbottom">
              <p class="gridbottom__left"><?php the_field('portname'); ?></p><p class="gridbottom__center"><?php the_field('portabstract'); ?></p>
              <p class="gridbottom__right">
                <a href="<?php the_permalink();?>" class="gridButton gridButton__more">More About This</a>
                <a class="gridButton gridButton__see" href="http://google.com">See Live</a>
              </p>
              <?php $portCounter = $portCounter + 1; ?>
            </div>
            </div>
          <?php  }?>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif;?>
    </div>