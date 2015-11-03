<?php

/**
 * @file
 * Contains the node from URL argument default plugin.
 */

/**
 * Default argument plugin to extract a node via menu_get_object
 *
 * This plugin actually has no options so it odes not need to do a great deal.
 */
class views_plugin_argument_default_node extends views_plugin_argument_default {
  function get_argument() {
    foreach (range(1, 3) as $i) {
      $node = menu_get_object('node', $i);
      if (!empty($node)) {
        return $node->nid;
      }
    }

    if (arg(0) == 'node' && is_numeric(arg(1))) {
      return arg(1);
    }

    // If this was system/ajax callback url does not contain info
    // about node nor does the post data of request but we can
    // find the node information in Header data in Referer value.
    if (!empty($_SERVER["HTTP_REFERER"])) {
      preg_match('/node\/(\d*)/i', $_SERVER["HTTP_REFERER"], $node_id_data);
      if (isset($node_id_data[1])) {
        return $node_id_data[1];
      }
    }
  }
}
