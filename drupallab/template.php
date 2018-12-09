<?php

function bartik_subtheme_preprocess_node(&$variables) {
  //Adds a variable for node creation date.
  $variables['creation_date'] = NULL;
    if ($variables['node']->created) {
      $variables['creation_date'] = format_date($variables['node']->created, 'custom', 'F j, Y, g:i a');
    }
  //Adds author name.
  $variables['author_name'] = $variables['name'];
}