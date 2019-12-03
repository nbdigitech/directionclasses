<?php

vc_map( array(
    "name" => esc_html__("Testimonail",'represent'),
    "base" => "represent_testimonail",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
    "params" => array(
        array(
        "type" => "textfield",
        "heading" => esc_html__("Item to Display",'represent'),
        "param_name" => "testimonail_item_to_display",
        "value" => '10',
        "description" => esc_html__("Numer of Item in page",'represent')
      ),
      array(
        "type" => "colorpicker",
        "heading" => esc_html__("Quote text color",'represent'),
        "param_name" => "testimonail_quote_text_color",
        "description" => esc_html__("Chose Quote text color",'represent')
      ),
      array(
        "type" => "colorpicker",
        "heading" => esc_html__("Quote Name text color",'represent'),
        "param_name" => "testimonail_name_text_color",
        "description" => esc_html__("Chose Name text color",'represent')
      ),
      array(
        "type" => "colorpicker",
        "heading" => esc_html__("Quote Job text color",'represent'),
        "param_name" => "testimonail_job_text_color",
        "description" => esc_html__("Chose Job text color",'represent')
      ),
    )
) );