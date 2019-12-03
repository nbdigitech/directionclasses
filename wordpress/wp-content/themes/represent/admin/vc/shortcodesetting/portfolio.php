<?php

vc_map( array(
    "name" => esc_html__("Portfolio",'represent'),
    "base" => "represent_portfolio",
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__("Itemperpage",'represent'),
            "param_name" => "portfolio_itemperpage",
            "value" => '10',
            "description" => esc_html__("Numer of Item in page",'represent')
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Portfolio Style",'represent'),
            "param_name" => "portfolio_style",
            "value" => array(
              "Grid" => "grid",
              "Masonry" => "massonry",
            ),
            "description" => esc_html__("Chose your portfolio style ",'represent')
        ),
      array(
            "type" => "textfield",
            "heading" => esc_html__("Columns",'represent'),
            "param_name" => "portfolio_columns",
            "value" => "4",
            "description" => esc_html__("Number Columns",'represent'),
        "dependency" => array(
          "element" => "portfolio_style",
          "value" => "grid"
        )
        ),
      array(
            "type" => "checkbox",
            "heading" => esc_html__("Show filter",'represent'),
            "param_name" => "portfolio_show_filter",
            "dependency" => array(
              "element" => "portfolio_style",
              "value" => "massonry"
            )
        )
    )
) );