  <?php 
  
  add_action('wp_ajax_nopriv_our_load_more_function','our_load_more_function');
  add_action('wp_ajax_our_load_more_function','our_load_more_function');
  
  function our_load_more_function(){
	   $paged = $_POST['page'] + 1;
	   $query = new WP_Query(array(
		'post_type'=>'post',
		'paged'=> $paged
	   
	   ));
	  
	  while ( $query->have_posts() ) : $query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;
	  
	  wp_reset_postdata();
	  
	  die();
	  
	  
  }
  
  
  
  