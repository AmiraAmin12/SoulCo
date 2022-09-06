<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define('P99_9018', 'Elementor WordPress Page Builder');

if (!class_exists('Plugs99_Plugin_Updater')) {
  include ('99updater-class.php');}

function p99_update_9018() {
  $key_99 = p99_fetchkey(P99_9018);
  $doing_cron = defined('DOING_CRON') && DOING_CRON;
  if (!current_user_can('manage_options') && !$doing_cron) {
    return;}
  if ( $key_99 !== "" ) {
  $edd_updater = new Plugs99_Plugin_Updater('https://99plugs.com/', PMAIN_9018, array(
    'version' => "3.2.5",
    'license' => $key_99,
    'item_id' => "9018",
    'author' => "Elementor",
    'url' => home_url()
  ));
  }
}
add_action('init', 'p99_update_9018');

function p99_filter_9018($transient) {
  if (isset($transient) && is_object($transient)) {
    if (isset($transient->response[plugin_basename(PMAIN_9018)])) {
      if (strpos($transient->response[plugin_basename(PMAIN_9018)]->package, '99plugs') !== false) {
      } else {
        unset($transient->response[plugin_basename(PMAIN_9018)]);
      }
    }
  }
  return $transient;
}
add_filter('pre_site_transient_update_plugins', 'p99_filter_9018');
add_filter('site_transient_update_plugins', 'p99_filter_9018');

add_filter('http_request_args', function ($r, $url) {
  if (0 === strpos($url, 'https://api.wordpress.org/plugins/update-check/1.1/')) {
    $plugins = json_decode($r['body']['plugins'], true);
    if (array_key_exists(plugin_basename(PMAIN_9018), $plugins['plugins'])) {
      unset($plugins['plugins'][plugin_basename(PMAIN_9018)]);
    }
    $r['body']['plugins'] = json_encode($plugins);
  }
  return $r;
}, PHP_INT_MAX, 3);

if (!function_exists('p99_dupechk')) {
  function p99_dupechk($needle, $haystack, $strict = false) {
    if(is_array($haystack)) {
      foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle)
        || (is_array($item) && p99_dupechk($needle, $item, $strict))) {
          return true;
        }
      }
    }
    return false;
  }
}
function p99_updmgr_9018() {
  $current_keys = get_option('apikeys');
  $unser_keys = maybe_unserialize($current_keys);
  $new_keys = array();

  if (!p99_dupechk(P99_9018, $unser_keys)) {
    $new_keys['keyname'] = stripslashes(strip_tags(P99_9018));
    $new_keys['keyvalue'] = '';
    $new_keys['keystatus'] = '';
    $unser_keys[] = $new_keys;
  }
  if (!empty($new_keys) && $new_keys != $unser_keys) {
    update_option('apikeys', $unser_keys);
  }
}
register_activation_hook(PMAIN_9018, 'p99_updmgr_9018');

if (!function_exists('p99_fetchkey')) {
  function p99_fetchkey($name_99) {
    $key_99 = "";
    if (function_exists('p99_get_key')) {
      $vyear = 'VIP Access Pass (365 Days)';
      $vlife = 'VIP Access Pass (Lifetime)';
      $nkf = 'NOKEYFOUND';
      if (p99_get_key($name_99) != $nkf && p99_get_key($name_99) != "") {
        $key_99 = p99_get_key($name_99);
      }
      elseif (p99_get_key($vyear) != $nkf && p99_get_key($vyear) != "") {
        $key_99 = p99_get_key($vyear);
      }
      elseif (p99_get_key($vlife) != $nkf && p99_get_key($vlife) != "") {
        $key_99 = p99_get_key($vlife);
      }
    }
    return $key_99;
  }
}