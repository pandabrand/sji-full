<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SJI-full
 */

?>

	</div><!-- #content -->
  </div><!-- .wrapper -->
  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="search-form">
	  <form role="search" method="get" id="searchform" class="form-wrapper cf" action="<?php echo home_url( '/' ); ?>">
		  <div><label class="screen-reader-text" for="s">Search for:</label>
			  <input type="text" value="" name="s" id="s" />
			  <button type="submit" id="searchsubmit" value="Search">Search</button>
		  </div>
	  </form>
    </div>
    <div class="copyright small-legal">
      Copyright &copy; <?php echo date('Y'); ?> The Board of Trustees of the University of Illinois.
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
