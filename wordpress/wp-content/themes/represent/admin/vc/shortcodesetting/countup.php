<?php 
vc_map( array(
   "name" => esc_html__("Count Up",'represent'),
   "base" => "represent_countup",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
   "params" => array(
      array(
         "type" => "textfield",
         "heading" => esc_html__("Number",'represent'),
         "param_name" => "countup_number",
         "value" => "2987",
         "description" => esc_html__("Count up Number (ex. 2154)",'represent'),
        'edit_field_class' => 'vc_col-xs-8',
      ),
     array(
       'type' => 'colorpicker',
       'heading' => esc_html__( 'Number Color', 'represent' ),
       'param_name' => 'countup_number_color',
       'description' => esc_html__( 'Enter text color', 'represent' ),
       'edit_field_class' => 'vc_col-xs-4',
     ),
     array(
         "type" => "textfield",
         "heading" => esc_html__("Title",'represent'),
         "param_name" => "countup_title",
         "value" => "2987",
         "description" => esc_html__("Count up Title",'represent'),
        'edit_field_class' => 'vc_col-xs-8',
      ),
     array(
       'type' => 'colorpicker',
       'heading' => esc_html__( 'Title Color', 'represent' ),
       'param_name' => 'countup_title_color',
       'description' => esc_html__( 'Enter text color', 'represent' ),
       'edit_field_class' => 'vc_col-xs-4',
     ),
      array(
         "type" => "textarea",
         "heading" => esc_html__("Description",'represent'),
         "param_name" => "countup_description",
         "value" => "New Represent Template",
         "description" => esc_html__("Give discription to count up number",'represent')
      ),
     array(
       'type' => 'colorpicker',
       'heading' => esc_html__( 'Description Text Color', 'represent' ),
       'param_name' => 'countup_description_color',
       'description' => esc_html__( 'Enter text color', 'represent' ),
     ),
   )
) );