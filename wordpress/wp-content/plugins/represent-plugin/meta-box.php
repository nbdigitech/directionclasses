<?php
if ( !class_exists('represent_CustomFields') ) {

  class represent_CustomFields {
    /**
     * @var  string  $represent_prefix  The prefix for storing custom fields in the postmeta table
     */
    var $represent_prefix = '';
    /**
     * @var  array  $represent_postTypes  An array of public custom post types, plus the standard "post" and "page" - add the custom types you want to include here
     */
    var $represent_postTypes = array( "testimonail", "page");
    /**
     * @var  array  $represent_customFields  Defines the custom fields available
     */
    var $represent_customFields =	array(

      // ---------------------testimonail---------------------
      array(
        "name"			=> "job_title",
        "title"			=> "Job",
        "description"	=> "",
        "float_left" 	=> "",
        "clear_after"	=> "",
        "type"			=> "text",
        "scope"			=>	array("testimonail"),
        "capability"	=> "manage_options",
        "dependency" 	=> ""
      ),

      // ---------------------testimonail/>---------------------
      // ---------------------testimonail---------------------
      array(
        "name"			=> "sub_title",
        "title"			=> "SubTitle",
        "description"	=> "",
        "float_left" 	=> "",
        "clear_after"	=> "",
        "type"			=> "text",
        "scope"			=>	array("page"),
        "capability"	=> "manage_options",
        "dependency" 	=> ""
      ),

      // ---------------------testimonail/>---------------------
    );



    function __construct() {
      add_action( 'admin_menu', array( &$this, 'represent_createCustomFields' ) );
      add_action( 'save_post', array( &$this, 'represent_saveCustomFields' ), 1, 2 );
      // Comment this line out if you want to keep default custom fields meta box
      add_action( 'do_meta_boxes', array( &$this, 'represent_removeDefaultCustomFields' ), 10, 3 );
    }
    /**
     * Remove the default Custom Fields meta box
     */
    function represent_removeDefaultCustomFields( $type, $context, $post ) {
      foreach ( array( 'normal', 'advanced', 'side' ) as $context ) {
        foreach ( $this->represent_postTypes as $postType ) {
          remove_meta_box( 'postcustom', $postType, $context );
        }
      }
    }
    /**
     * Create the new Custom Fields meta box
     */
    function represent_createCustomFields() {
      if ( function_exists( 'add_meta_box' ) ) {
        foreach ( $this->represent_postTypes as $postType ) {
          if($postType == "testimonail") {
            add_meta_box( 'my-custom-fields', 'Information', array( &$this, 'represent_displayCustomFields' ), 'testimonail', 'advanced', 'high' );
          }
          if($postType == "page") {
            add_meta_box( 'my-custom-fields', 'Information', array( &$this, 'represent_displayCustomFields' ), 'page', 'advanced', 'high' );
          }
        }
      }
    }
    /**
     * Display the new Custom Fields meta box
     */
    function represent_displayCustomFields($current_meta_id) {

      if(!is_string($current_meta_id)){
        $current_meta_id = "page-settings";
      }
      global $post;
      global $wdoptions_proya;
      global $fontArrays;
      ?>
      <div class="form-wrap">
        <?php
        wp_nonce_field( 'my-custom-fields', 'my-custom-fields_wpnonce', false, true );
        foreach ( $this->represent_customFields as $customField ) {
          // Check scope
          $scope = $customField[ 'scope' ];
          $meta_id = isset($customField[ 'meta_id' ]) ? $customField[ 'meta_id' ] : false;
          $dependency = $customField[ 'dependency' ];
          $output = false;
          foreach ( $scope as $scopeItem ) {
            switch ( $scopeItem ) {
              default: {
                if ( $post->post_type == $scopeItem && ($current_meta_id == $meta_id || $meta_id == false ) ){
                  if($dependency != ""){
                    foreach ( $dependency as $dependencyKey => $dependencyValue ) {
                      foreach ( $dependencyValue as $dependencyVal ) {
                        if(isset($wdoptions_proya[$dependencyKey]) && $wdoptions_proya[$dependencyKey] == $dependencyVal){
                          $output = true;
                          break;
                        }
                      }
                    }
                  }else{
                    $output = true;
                  }
                }else{
                  break;
                }
              }
            }
            if ( $output ) break;
          }
          // Check capability
          if ( !current_user_can( $customField['capability'], $post->ID ) )
            $output = false;
          // Output if allowed
          if ( $output ) { ?>
            <?php
            switch ( $customField[ 'type' ] ) {
              case "checkbox": {
                // Checkbox
                if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
                echo '<div class="form-field '. $float_left .' form-required">';
                echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
                echo '<input type="checkbox" name="' . $this->represent_prefix . $customField['name'] . '" id="' . $this->represent_prefix . $customField['name'] . '" value="yes"';
                if ( get_post_meta( $post->ID, $this->represent_prefix . $customField['name'], true ) == "yes" )
                  echo ' checked="checked"';
                echo '" style="width: auto;" />';
                echo '</div>';
                break;
              }

            case "selectbox": {
              // Selectbox
              if ( $customField[ 'float_left' ] == 'yes' ) {$float_left = 'float_left';} else {$float_left = '';}
              echo '<div class="form-field '. $float_left . ' form-required">';
              echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
              echo '<select name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '"> ';
              ?>
              <?php foreach ($customField['values'] as $valuesKey => $valuesValue) { ?>
              <option value="<?php echo esc_attr($valuesKey); ?>" <?php if (get_post_meta( $post->ID, $this->represent_prefix . $customField['name'], true ) == $valuesKey ) { ?> selected="selected" <?php } ?>><?php echo esc_attr($valuesValue); ?></option>
            <?php } ?>

            <?php
            echo '</select>';
            echo '</div>';
            break;
            }
            case "selectbox-category": {
              $categories = get_categories();
              if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
              echo '<div class="form-field '. $float_left .' form-required">';
              echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
              echo '<select name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '"> ';
              echo '<option value=""></option>';
              foreach($categories as $category) :
                echo '<option value="'. $category->term_id .'"';
                if (get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) == $category->term_id ) { echo 'selected="selected"';}
                echo '>';
                echo esc_attr($category->name);
                ?>&nbsp;&nbsp;&nbsp;<?php
                echo '</option>';

              endforeach;
              echo '</select>';
              echo '</div>';
              break;
            }
            case "image-title-image": {
            wp_enqueue_media();

            ?>
              <script type="text/javascript">
                jQuery(document).ready(function($) {

                  jQuery('.upload_button').click(function(){
                    wp.media.editor.send.attachment = function(props, attachment){
                      jQuery('.title_image').val(attachment.url);
                    }
                    wp.media.editor.open(this);

                    return false;
                  });

                });
              </script>

            <?php

            if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
            echo '<div class="form-field '. $float_left .' form-required">';
            $represent_page_bg_img = get_post_meta($post->ID, 'represent_page_title_area_bg_img', true);
            //print $represent_page_bg_img;
            echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
            echo '<div class="image_holder"><input type="text" id="' . $this->represent_prefix . $customField[ 'name' ] .'" name="' . $this->represent_prefix . $customField[ 'name' ] . '" class="title_image" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button button-primary" type="button" value="Upload file"></div>';
            echo '</div>';
            break;
            }
            case "font-family": {
            // Selectbox
            if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
            echo '<div class="form-field '. $float_left .' ">';
            echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
            echo '<select name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '"> ';
            ?>
              <option value="" <?php if (get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) == "-1" ) { ?> selected="selected" <?php } ?>>Default</option>
              <?php foreach($fontArrays as $fontArray) { ?>
              <option <?php if (get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) == str_replace(' ', '+', $fontArray["family"])) { echo "selected='selected'"; } ?>  value="<?php echo str_replace(' ', '+', $fontArray["family"]); ?>"><?php echo  $fontArray["family"]; ?></option>
            <?php } ?>
            <?php
            echo '</select>';
            echo '</div>';
            break;
            }
            case "colorpicker": {


            add_action( 'load-widgets.php', 'represent_load_color_picker' );
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_script( 'wp-color-picker' );
            //Colorpicker
            wp_enqueue_media();

            wp_enqueue_script('wp-color-picker');
            wp_enqueue_style( 'wp-color-picker' );

            wp_enqueue_script('colorpick',    get_template_directory_uri() . "/js/bootstrap-colorpicker.min.js", array( 'jquery' ) );
            wp_enqueue_style ('colorpick',    get_template_directory_uri() . "/stylesheets/bootstrap-colorpicker.min.css");

            ?>
              <script type="text/javascript">
                jQuery(document).ready(function($) {

                  $('.wd-color-picker').colorpicker(
                    {format: 'rgba'}
                  );

                  jQuery('#represent_upload_btn').click(function(){
                    wp.media.editor.send.attachment = function(props, attachment){
                      jQuery('#represent_logo_filed').val(attachment.url);
                    }
                    wp.media.editor.open(this);

                    return false;
                  });

                });
              </script>

            <?php


            if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
            echo '<div class="form-field '. $float_left .' colorpicker_input">';
            echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
            echo '<div class="colorSelector"><div style="background-color:'.htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ) .'"></div></div>';
            echo '<input type="text" class="wd-color-picker" data-default-color="#C0392B" name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ) . '" size="10" maxlength="10" />';
            echo '</div>';
            break;
            }
            case "textarea":
            case "wysiwyg": {
            // Text area
            if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
            echo '<div class="form-field '. $float_left .' form-required">';
            echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
            echo '<textarea name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '" columns="30" rows="3">' . htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ) . '</textarea>';




            // WYSIWYG
            if ( $customField[ 'type' ] == "wysiwyg" ) { ?>
              <script type="text/javascript">
                jQuery( document ).ready( function() {
                  jQuery( "<?php echo   $this->represent_prefix . $customField[ 'name' ]; ?>" ).addClass( "mceEditor" );
                  if ( typeof( tinyMCE ) == "object" && typeof( tinyMCE.execCommand ) == "function" ) {
                    tinyMCE.execCommand( "mceAddControl", false, "<?php echo   $this->represent_prefix . $customField[ 'name' ]; ?>" );
                  }
                });
              </script>
            <?php }
              echo '</div>';
              break;
            }
              case "short-text-200": {
                // Plain text field
                if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
                echo '<div class="form-field '. $float_left .' short_text_200">';
                echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
                echo '<input type="text" name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ) . '" />';
                echo '</div>';
                break;
              }
              case "hidden": {

                break;
              }
              default: {
                // Plain text field
                if ( $customField[ 'float_left' ] == 'yes'){$float_left = 'float_left';} else {$float_left = '';}
                echo '<div class="form-field '. $float_left .' form-required">';
                echo '<label for="' . $this->represent_prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
                echo '<input type="text" name="' . $this->represent_prefix . $customField[ 'name' ] . '" id="' . $this->represent_prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->represent_prefix . $customField[ 'name' ], true ) ) . '" />';
                echo '</div>';
                break;
              }
            }
            ?>
            <?php if ( $customField[ 'description' ] ) echo '<p>' . $customField[ 'description' ] . '</p>'; ?>
            <?php if ( $customField[ 'clear_after' ] == 'yes' ) echo '<div class="clear"></div>'; ?>

          <?php
          }
        } ?>
      </div>
    <?php
    }



    /**
     * Save the new Custom Fields values
     */
    function represent_saveCustomFields( $post_id, $post ) {
      if ( !isset( $_POST[ 'my-custom-fields_wpnonce' ] ) || !wp_verify_nonce( $_POST[ 'my-custom-fields_wpnonce' ], 'my-custom-fields' ) )
        return;
      if ( !current_user_can( 'edit_post', $post_id ) )
        return;
      if ( ! in_array( $post->post_type, $this->represent_postTypes ) )
        return;
      foreach ( $this->represent_customFields as $customField ) {
        if ( current_user_can( $customField['capability'], $post_id ) ) {

          if ( isset( $_POST[ $this->represent_prefix . $customField['name'] ] ) && trim( $_POST[ $this->represent_prefix . $customField['name'] ] !== '') ) {

            $value = $_POST[ $this->represent_prefix . $customField['name'] ];
            // Auto-paragraphs for any WYSIWYG
            if ( $customField['type'] == "wysiwyg" ) $value = wpautop( $value );
            update_post_meta( $post_id, $this->represent_prefix . $customField[ 'name' ], $value );
          } else {
            delete_post_meta( $post_id, $this->represent_prefix . $customField[ 'name' ] );
          }
        }
      }


    }





  } // End Class

} // End if class exists statement

// Instantiate the class
if ( class_exists('represent_CustomFields') ) {
  $represent_CustomFields_var = new represent_CustomFields();
}
//------------ function post format gallery ---------
/*--------------------meta box multi image uploade-------------------*/
// add meta box
function represent_multiple_image () {
  add_meta_box('represent_meta_box_multiple_image', 'Image Gallery', 'represent_upload_image',array('post'));
}
add_action( 'add_meta_boxes', 'represent_multiple_image' );
function represent_upload_image() {
  global $post;?>

  <div class="add_portfolio_images">
    <div class="add_portfolio_images_inner">

      <button class="represent-gallery-upload button button-primary button-large">Browse</button>
      <ul class="represent-gallery-images-holder clearfix">
        <?php
        $portfolio_image_gallery_val = get_post_meta( $post->ID, 'represent_portfolio-image-gallery', true );
        if($portfolio_image_gallery_val!='' ) $portfolio_image_gallery_array=explode(',',$portfolio_image_gallery_val);

        if(isset($portfolio_image_gallery_array) && count($portfolio_image_gallery_array)!=0):

          foreach($portfolio_image_gallery_array as $gimg_id):

            $gimage_wp = wp_get_attachment_image_src($gimg_id,'thumbnail', true);
            echo '<li class="represent-gallery-image-holder"><img src="'.$gimage_wp[0].'"/></li>';

          endforeach;

        endif;
        ?>
      </ul>
      <input type="hidden" value="<?php echo esc_attr($portfolio_image_gallery_val); ?>" id="represent_portfolio-image-gallery" name="represent_portfolio-image-gallery">
    </div>
  </div>
<?php
}
//save meta box
if(isset($_POST['represent_portfolio-image-gallery'])){
  function represent_save_meta_box_image($post_id) {
    update_post_meta($post_id, 'represent_portfolio-image-gallery', $_POST['represent_portfolio-image-gallery']);
  }
  add_action('save_post', 'represent_save_meta_box_image' );
}
//ajax
if (!function_exists('represent_gallery_upload_get_images')){
  function represent_gallery_upload_get_images(){
    $ids=$_POST['ids'];
    $ids=explode(",",$ids);
    foreach($ids as $id):
      $image = wp_get_attachment_image_src($id,'thumbnail', true);
      echo '<li class="represent-gallery-image-holder"><img src="'.$image[0].'"/></li>';
    endforeach;
    exit;
  }
}
add_action( 'wp_ajax_represent_gallery_upload_get_images', 'represent_gallery_upload_get_images');
?>