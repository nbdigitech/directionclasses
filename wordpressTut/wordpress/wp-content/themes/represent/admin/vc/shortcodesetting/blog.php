<?php
/**
 * Created by PhpStorm.
 * User: abdellatif
 * Date: 1/22/2017
 * Time: 10:30 PM
 */
vc_map( array(
    "name" => esc_html__("Blog",'represent'),
    "base" => "represent_blog",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__("Itemperpage",'represent'),
            "param_name" => "blog_itemperpage",
            "value" => '10',
            "description" => esc_html__("Numer of Item in page",'represent')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Columns",'represent'),
            "param_name" => "blog_columns",
            "value" => "4",
            "description" => esc_html__("Number Columns",'represent')
        ),
      array(
            "type" => "checkbox",
            "heading" => esc_html__("Show Post Info",'represent'),
            "param_name" => "blog_info",
        "value"         => array('Yes, Pleas'   => true ),
        ),
    )
) );