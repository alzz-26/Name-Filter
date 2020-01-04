<?php

/**
 * @file
 * Contains \Drupal\name_replacer\Plugin\Filter\NameReplacer.
 */

namespace Drupal\name_replacer\Plugin\Filter;

use Drupal\filter\Plugin\FilterBase;
use Drupal\filter\FilterProcessResult;

/**
 * A filter for this module.
 * 
 * @Filter(
 *   id = "name_replacer",
 *   title = @Translation("Name Replacer"),
 *   description = @Translation("A filter that replaces your firstname with lastname."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 * )
 */

class NameReplacer extends FilterBase {
  
  public function process($text, $langcode) {

  	$pattern = "/\[name:(.*\w+):(.*\w+)\]/i";
  	$replacement = "Name: $2 $1";
  	$result = preg_replace($pattern, $replacement, $text);
  	return new FilterProcessResult($result);

  }

}
