<?php

get_header('front_page'); ?>

	<div>
		<main id="main" role="main">
			<?php
			  while ( have_posts() ) : the_post();
			?>

			  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				  <header class="entry-header front-page-header">
				  </header><!-- .entry-header -->

    			    <div class="front-featured-image">
					  <?php 
						if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					  ?>
        			      <img src="<?php echo $image[0]; ?>" />
        			  <?php endif ?>
    			    <div class="front-page-text front-page-quote">
					  <?php
						  the_content();
					  ?>
					</div><!-- #front-page-text -->
				  </div><!-- .entry-content -->
		   <?php
			 endwhile; // End of the loop.
		   ?>


				  <div class="front-break-bar"></div>
				  <footer class="entry-footer">
				    <?php
				      $posts = get_posts(array(
                        'post_type' => array( 'post', 'page' ),
                        'meta_query'  => array(
                          array (
							'key'		=> 'display_as_front_page_feature',
							'value'    => '1',
							'compare'	=> '=='
						  )
						)
                      ));
                      foreach($posts as $featured_post):			    
				    ?>
					  <div class="featured-panel">
						<a href="<?php echo get_permalink($featured_post->ID); ?>">
						<div class="featured-title">
						  <div class="title-wrapper">
							<?php echo $featured_post->post_title ?>
						  </div>
						</div>
						<div class="featured-image">
						  <?php 
							if (has_post_thumbnail( $featured_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_post->ID ), 'feature-panel-thumb' );
						  ?>
						  <img src="<?php echo $image[0]; ?>" />
						  <?php endif; ?>
						</div>
						<div class="featured-description">
						  <div class="description-text">
							<?php echo get_field('front_page_feature', $featured_post->ID); ?>
						  </div>
						</div>
						</a>
					  </div>
				    <?php
				      endforeach;
				    ?>
				  </footer><!-- .entry-footer -->
			  </div><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
