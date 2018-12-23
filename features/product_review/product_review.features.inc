<?php

/**
 * @file
 * product_review.features.inc
 */

/**
 * Implements hook_node_info().
 */
function product_review_node_info() {
  $items = array(
    'product_review' => array(
      'name' => t('Product review'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
