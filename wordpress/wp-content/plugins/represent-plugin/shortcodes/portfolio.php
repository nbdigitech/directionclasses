<?php

function represent_portfolio( $atts ) {
    extract( shortcode_atts( array(
        'portfolio_itemperpage' => '3',
        'portfolio_style' => 'grid',
        'portfolio_columns' => '3',
        'portfolio_show_filter' => '',
    ), $atts ) );
    ob_start();

  if($portfolio_show_filter == true) {
  ?>
  <div class="portfolio-category">
    <button data-filter=""><?php echo esc_html__('All', 'represent') ?></button>
    <?php $terms = get_terms( array(
      'taxonomy' => 'portfolio_categories',
      'hide_empty' => false,
    ) );
  if ( $terms && ! is_wp_error( $terms ) ) {
    foreach ($terms as $term) {
      ?>
      <button data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></button>
    <?php
    }
  }
    ?>
  </div>
<?php } ?>
  <?php
  if($portfolio_style == 'grid') {
    $article_class ='portfolio-grid block-grid-md-'.$portfolio_columns ;
    $item_class = ' item-grid-portfolio ';
  }else{
    $article_class = ' masonry-portfolio ';
    $item_class = ' item-masonry-portfolio ';
  }


  ?>
  <div class='<?php echo $article_class ?>'>
    <?php
    	$loop = new WP_Query( array( 'posts_per_page' => $portfolio_itemperpage, 'post_type' => 'portfolio' ) );
  while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="portfolio-item <?php echo $item_class ?>
        <?php $terms = get_the_terms( get_the_ID(), 'portfolio_categories' );
    if ( $terms && ! is_wp_error( $terms ) ) {
      foreach ( $terms as $term ) {
        $term_filter = str_replace(' ', '-', $term->name);
        echo strtolower($term_filter) . " ";
      }
      ?>
          <?php } ?>" >
      <div class="portfolio-wrapper">
        <div class="portfolio-thumbnail">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'represent_portfolio_thumbnail');
          } ?>
          <div class="view-icon">
            <a class="link" href="<?php the_permalink() ?>"><i class="ion-ios-play"></i></a>
          </div>
        </div>
        <div class="portfolio-caption">
          <div class="work-tag">
            <p><?php echo get_the_category_list(' , ') ?></p>
          </div>
          <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        </div>
      </div>
    </div>
    <?php endwhile;?>
  </div>
    <?php
    return ob_get_clean();

}
add_shortcode('represent_portfolio', 'represent_portfolio');