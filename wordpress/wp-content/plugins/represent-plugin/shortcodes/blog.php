<?php 
/*-----------------------------------------------------------------------------------*/
/*  Blog Postes
/*-----------------------------------------------------------------------------------*/

function represent_blog( $atts ) {
	extract( shortcode_atts( array(
    'blog_itemperpage' => '3',
    'blog_columns' => '4',
    'blog_info' => '',

  ), $atts ) );
	ob_start();
  ?>
  <div class="no-padding block-grid-md-<?php echo esc_html($blog_columns) ?>">
  	<?php
    $loop = new WP_Query( array( 'posts_per_page' => $blog_itemperpage, 'ignore_sticky_posts' => true ) );

    while ( $loop->have_posts() ) : $loop->the_post();

      include( plugin_dir_path( __FILE__ ).'blog/content'.get_post_format().'.php');

   endwhile; ?>
  </div>

	<?php
	return ob_get_clean();
	
}
add_shortcode('represent_blog', 'represent_blog');

