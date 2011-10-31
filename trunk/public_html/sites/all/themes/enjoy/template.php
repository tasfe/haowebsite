<?php
function enjoy_preprocess_page(&$vars)
{
$css = $vars['css'];
unset($css['all']['module']['modules/system/system.css']);
unset($css['all']['module']['modules/system/defaults.css']);
unset($css['all']['module']['modules/system/system-menus.css']);
$vars['styles'] = drupal_get_css($css);
}
