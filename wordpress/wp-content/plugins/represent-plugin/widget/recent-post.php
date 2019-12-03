<?php

class represent_recent_post extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Last Posts'); 
    }
  
function form($instance) {
	if(isset($instance['title']))    {
		 $title = esc_attr($instance['title']);
	}  else {
		 $title = '';
	}  
    if(isset($instance['dis_posts']))  {
    	  $dis_posts = esc_attr($instance['dis_posts']);
    }   else {
    	$dis_posts = '';
    }
	if(isset($instance['most_comment_posts']))  {
    	  $most_comment_posts = esc_attr($instance['most_comment_posts']);
    }   else {
    	$most_comment_posts = '';
    }
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('dis_posts'); ?>"><?php _e('Number of Posts Displayed:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('dis_posts'); ?>" name="<?php echo $this->get_field_name('dis_posts'); ?>" type="text" value="<?php echo $dis_posts; ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('most_comment_posts'); ?>"><?php _e('post commented'); ?> <input class="widefat" <?php if($most_comment_posts=='on') echo 'checked' ?> id="<?php echo $this->get_field_id('most_comment_posts'); ?>" name="<?php echo $this->get_field_name('most_comment_posts'); ?>" type="checkbox"  /></label></p>
        
        <?php 
    }
function widget($args, $instance) {
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
    	$dis_posts = $instance['dis_posts'];
		if(isset($instance['most_comment_posts'])) {
			$most_comment_posts = $instance['most_comment_posts'];
		}else{
			$most_comment_posts = '';
		}
  echo $before_widget;
  if ( $title )
     echo $before_title . $title . $after_title;
  ?>
  <div class="widget">
   <?php
   global $post,$wp_query;

		 if($most_comment_posts == 'on'){
			$args = array( 'posts_per_page' => $dis_posts,'orderby'=>'comment_count','ignore_sticky_posts' => true);
       }else{
       	$args = array( 'posts_per_page' => $dis_posts , 'ignore_sticky_posts' => true);
       }
        $loop = new WP_Query($args);
				while ( $loop->have_posts() ) : $loop->the_post();
        ?>
          <div class="latest-posts">
            <div class="latest-posts-media">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('represent-side-thumbnail'); ?></a>
            </div>
            <div class="latest-posts-body">
              <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
              <p><?php the_date() ?></p>
            </div>
          </div>
   <?php endwhile; ?>
</div>
<?php echo $after_widget;
    }
} 

add_action('widgets_init', create_function('', 'return register_widget("represent_recent_post");'));
