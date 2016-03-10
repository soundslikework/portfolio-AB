<footer>
  <div class="container">
  <h2>Contact</h2>
  <div class="contactEmail">
  	<p>Let's make cool stuff!</p>
  	<a href="mailto:adam@adambrady.ca">adam [at] adambrady.ca</a>
  </div>
	<?php echo do_shortcode('[contact-form-7 id="19" title="Contact"]');?>
	    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'social'
    )); ?>
    <p>&copy; <?php echo date('Y'); ?> Adam Brady</p>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>