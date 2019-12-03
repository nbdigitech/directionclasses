<?php
global $represent;
$represent_custom_css = "
  :root {
  --color-primary :".$represent['opt-primary-color']['color'].";
  --color-text-body-default: ".$represent['opt-body-color']['color'].";
  --color-text-body-alt: ".$represent['opt-body-alt-color']['color'].";
  --color-text-headers-default: ".$represent['opt-header-color']['color'].";
  --color-text-headers-alt: ".$represent['opt-header-alt-color']['color'].";
  --color-button-default: ".$represent['opt-button-text-color']['color'].";
  --color-button-alt: ".$represent['opt-button-text-color-alt']['color'].";
  --color-border: ".$represent['opt-border-color']['color'].";
  --font-family-sans: ".$represent['opt-body-font']['font-family'].";
  --font-family-serif: ".$represent['opt-header-font']['font-family'].";

  }
  ";