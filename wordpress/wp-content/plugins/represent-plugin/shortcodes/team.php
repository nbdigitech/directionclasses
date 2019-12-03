<?php
/**
 * --------------- Pricing Table -------------
 */
function represent_team( $atts ) {
  extract( shortcode_atts( array(
    'member_name' => '',
    'member_style' => 'team-style1',
    'member_image' => '',
    'member_job' => '',
    'team_socials' => '',
  ), $atts ) );
  ob_start();
  ?>
  <div class="team-members <?php echo $member_style ?>">
     <div>
    <?php
    $team_image = wp_get_attachment_image_src($member_image , 'represent-team-thumbnail');
   ?>
    <img src="<?php echo esc_url($team_image[0]) ?>" alt="team">
    <div class="team-info">
      <h3 class="name"><?php echo esc_html($member_name) ?></h3>
      <h4 class="job"><?php echo esc_html($member_job) ?></h4>
      <?php
      $team_social = vc_param_group_parse_atts( $team_socials );
       ?>
      <ul class="team-social">
        <?php
        foreach ($team_social as $value) {
          ?>
          <li><a href="<?php echo esc_html($value['team_social_link']) ?>"><i class="<?php echo esc_html($value['team_social_icon']) ?>" ></i></a> </li>
        <?php
        }
        ?>
      </ul>

    </div>
    </div>
  </div>
  <?php
 return ob_get_clean();

}
add_shortcode('represent_team', 'represent_team');
