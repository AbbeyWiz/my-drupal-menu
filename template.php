<?php
function abbeylashly_preprocess_html (&$var){

  drupal_add_css('http://fonts.googleapis.com/css?family=Lovers+Quarrel', array('group' => CSS_THEME));

  drupal_add_js(drupal_get_path('theme', 'abbeylashly') . '/js/jrespond.js',array('type' => 'file','scope' => 'footer'));
  drupal_add_js(drupal_get_path('theme', 'abbeylashly') . '/js/superfish.js',array('type' => 'file','scope' => 'footer'));
  drupal_add_js(drupal_get_path('theme', 'abbeylashly') . '/js/functions.js',array('type' => 'file','scope' => 'footer'));



}
?>
