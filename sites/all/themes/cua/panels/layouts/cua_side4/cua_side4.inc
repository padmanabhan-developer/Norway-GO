<?php

// Plugin definition
$plugin = array(
  'title' => t('Side med 4 box'),
  'category' => t('cua'),
  'icon' => 'cua_side4.png',
  'theme' => 'cua_side4',
  'css' => 'cua_side4.css',
  'regions' => array(
	'mc1' => t('content 1'),
	'mc2' => t('content 2'),
	'mc3' => t('content 3'),
	'mc4' => t('content 4')
  ),
);
