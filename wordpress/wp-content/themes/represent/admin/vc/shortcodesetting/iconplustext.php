<?php 
vc_map( array(
   "name" => esc_html__("Icon plus text",'represent'),
   "base" => "represent_iconplustext",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__("Icon / Image",'represent'),
         "param_name" => "iconplustext_chose",
         "description" => esc_html__("chhose your icon frome fontawsome liste",'represent'),
        "value" => array(
          "Icon" =>"icon",
          "Image" =>"image",

        ),
      ),
     array(
       "type" => "attach_image",
       "heading" => esc_html__("Image",'represent'),
       "param_name" => "iconplustext_image",
       "description" => esc_html__("chhose your icon frome fontawsome liste",'represent'),
       'dependency' => array(
         'element' => 'iconplustext_chose',
         'value' => 'image',
       ),
     ),
     array(
         "type" => "iconpicker",
         "heading" => esc_html__("Number",'represent'),
         "param_name" => "iconplustext_icon",
         "description" => esc_html__("chhose your icon frome fontawsome liste",'represent'),
       'dependency' => array(
         'element' => 'iconplustext_chose',
         'value' => 'icon',
       ),
      ),
      array(
         "type" => "textfield",
         "heading" => esc_html__("Titel",'represent'),
         "param_name" => "iconplustext_title",
         "value" => "New Represent Template",
         "description" => esc_html__("Give Title",'represent'),
        'edit_field_class' => 'vc_col-xs-8',
      ),
     array(
         "type" => "colorpicker",
         "heading" => esc_html__("Titel text color",'represent'),
         "param_name" => "iconplustext_title_color",
         "description" => esc_html__("Give Title color",'represent'),
       'edit_field_class' => 'vc_col-xs-4',
      ),
      array(
         "type" => "textarea",
         "heading" => esc_html__("Description",'represent'),
         "param_name" => "iconplustext_discription",
         "value" => "New Represent Template",
         "description" => esc_html__("Give discription Text",'represent'),
        'edit_field_class' => 'vc_col-xs-8',
      ),
     array(
         "type" => "colorpicker",
         "heading" => esc_html__("Description Text color",'represent'),
         "param_name" => "iconplustext_discription_color",
         "description" => esc_html__("Give discription Text Color",'represent'),
           'edit_field_class' => 'vc_col-xs-4',
      ),
     array(

         "type" => "dropdown",
         "heading" => esc_html__("Icon Position",'represent'),
         "param_name" => "iconplustext_style",
         "value" => array(
           "Style I" => 'tic-style1',
           "Style II" => 'tic-style2',
           "Style III" => 'tic-style3',
         ),
         "description" => esc_html__("Chose Icon Position",'represent')
      ),
     array(
      "type" => "checkbox",
      "heading" => esc_html__("Show read More button",'represent'),
      "param_name" => "iconplustext_show_readmore",
       "value" => array("yes, Please" => 'yes'),
      "description" => esc_html__("Give discription Text Color",'represent')
      ),
     array(
      "type" => "vc_link",
      "heading" => esc_html__("Description Text color",'represent'),
      "param_name" => "iconplustext_readmore",
      "description" => esc_html__("Give discription Text Color",'represent'),
       "dependency" => array(
        "element" => "iconplustext_show_readmore",
        "value" => "yes"
          )
      ),
   )
) );
