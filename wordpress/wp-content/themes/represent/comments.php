<?php
// Comments
if (!function_exists('represent_comments_callback')) {
  function represent_comments_callback($comment, $args, $depth)
  {
    $GLOBALS['comment'] = $comment;
    $args = array(
      'walker' => null,
      'max_depth' => '10',
      'style' => 'ul',
      'callback' => null,
      'end-callback' => null,
      'type' => 'comment',
      'reply_text' => esc_html__('Reply', 'represent'),
      'page' => '',
      'per_page' => '',
      'avatar_size' => 70,
      'reverse_top_level' => null,
      'reverse_children' => '',
      'format' => 'html5',
      'short_ping' => true
    );

    if ('div' == $args['style']) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
    if (post_password_required()) { ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="bottom"><i class="fa fa-user-secret"
                             aria-hidden="true"></i><?php echo esc_html__('This post is password protected. Enter the password to view comments.', 'represent'); ?>
        </p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      return;
    }
    ?>
    <<?php echo esc_attr($tag) ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div class="container">
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body row">
  <?php endif;
    if (get_avatar($comment, $args['avatar_size']) != false) { ?>
      <div class="comment-avatar col-lg-2">
        <?php echo get_avatar($comment, $args['avatar_size']); ?>
      </div>
    <?php } ?>
  <div
    class="<?php if (get_avatar($comment, $args['avatar_size']) != false) echo 'col-lg-10'; else echo 'col-lg-12'; ?> comment-info">
    <div class="comment-author vcard clearfix">
      <?php printf(esc_html__('%s', 'represent'), get_comment_author_link()) ?>
      <?php if ($comment->comment_approved == '0') : ?>
        <em
          class="comment-awaiting-moderation"><?php echo esc_html__('Your comment is awaiting moderation.', 'represent') ?></em>
        <br/>
      <?php endif; ?>
      <div class="comment-meta">
        <span><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . " " . esc_html__('ago', 'represent'); ?></span>
      </div>
    </div>
    <div class="comment-content">
      <?php comment_text() ?>
      <?php if (comments_open()) { ?>
        <div class="reply btn btn-default btn-xs">
          <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      <?php } ?>
    </div>
    <?php if ('div' != $args['style']) : ?>
    </div>
    </div>
    </div>
  <?php endif;
  }
}

?>
<div id="comments" class="comments-area">

  <?php if (have_comments()) : ?>

    <div class="comments-title custom-heading">
      <h3 class="title"><span><?php comments_number(esc_html__('No responses','represent'),esc_html__('One comment','represent') , esc_html__('% Comments','represent')); ?></span></h3>
    </div>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <?php endif; // Check for comment navigation. ?>

    <ul class="comment-list">
      <?php wp_list_comments(array('callback' => 'represent_comments_callback')); ?>
    </ul>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
        <h1 class="sr-only"><?php echo esc_html__('Comment navigation', 'represent'); ?></h1>

        <div class="nav-previous"><?php previous_comments_link(esc_html__('&laquo; Older Comments', 'represent')); ?></div>
        <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments &raquo;', 'represent')); ?></div>
        <div class="clearfix"></div>
      </nav>
    <?php endif; // Check for comment navigation.
    if (!comments_open()) : ?>
      <div class="alert alert-danger" role="alert">
        <p class="no-comments"><i
            class="fa fa-exclamation-triangle"></i><?php echo esc_html__('Comments are closed.', 'represent'); ?></p>
      </div>

    <?php endif;
  endif; // have_comments()
  if (comments_open()) :
    $fields = array(
      'author' => '<div><input type="text" class="five" name="author" id="author" value="' . esc_attr($comment_author) . '" placeholder="' . esc_attr__("Your Name", "represent") . '" size="22" tabindex="1" ></div>',
      'email' => '<div><input type="text" class="five" name="email" id="email" value="' . esc_attr($comment_author_email) . '" placeholder="' . esc_attr__("Your Email", "represent") . '" size="22" tabindex="2" ></div>',
      'url' => '<div><input type="text" class="five" name="url" id="url" value="' . esc_attr($comment_author_url) . '" placeholder="' . esc_attr__("Your Website", "represent") . '" size="22" tabindex="3"></div>',
    );
    $args = array(
      'class_submit' => 'btn btn-primary btn-sm',
      'label_submit' => esc_html__('Submit Comment', 'represent'),
      'comment_notes_before' => '',
      'fields' => apply_filters('comment_form_default_fields', $fields),
      'comment_field' => '<textarea name="comment" id="comment" tabindex="4" rows="10" placeholder="' . esc_attr__("Comment", "represent") . '"></textarea>'
    );
    comment_form($args); ?>
  <?php endif; // if you delete this the sky will fall on your head ?>

</div><!-- #comments -->