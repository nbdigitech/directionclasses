<?php 
vc_map( array(
   "name" => esc_html__("Button",'represent'),
   "base" => "represent_button",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
   "category" => 'Represent',
   "params" => array(
     array(
       "type" => "vc_link",
       "heading" => esc_html__("Url & Title Button",'represent'),
       "param_name" => "button_url",

     ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__("Size",'represent'),
         "param_name" => "button_size",
        "value" => array(
          "Large" =>"large",
          "Medium" =>"medium",
          "small" =>"small",

        ),
      ),
     array(

         "type" => "dropdown",
         "heading" => esc_html__("Style",'represent'),
         "param_name" => "button_style",
         "value" => array(
           "Style I" => 'style1',
           "Style II" => 'style2',
           "Style III" => 'style3',
         ),
      ),


   )
) );
