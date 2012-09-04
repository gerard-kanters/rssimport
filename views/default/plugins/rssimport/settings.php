<?php

$options = array(
    'name' => 'params[allow_cron]',
    'value' => $vars['entity']->allow_cron ? $vars['entity']->allow_cron : 'no',
    'options_values' => array(
        'yes' => elgg_echo('option:yes'),
        'no' => elgg_echo('option:no')
    )
);

echo elgg_view('input/dropdown', $options) . " " . elgg_echo('rssimport:allow:cron') . "<br><br>";

echo "<strong>" . elgg_echo('rssimport:cron:frequency') . "</strong><br>";

$options['name'] = 'params[cron_hourly]';
$options['value'] = $vars['entity']->cron_hourly ? $vars['entity']->cron_hourly : 'no';
echo elgg_view('input/dropdown', $options) . " " . elgg_echo('rssimport:allow:cron:hourly') . "<br>";

$options['name'] = 'params[cron_daily]';
$options['value'] = $vars['entity']->cron_daily ? $vars['entity']->cron_daily : 'no';
echo elgg_view('input/dropdown', $options) . " " . elgg_echo('rssimport:allow:cron:daily') . "<br>";

$options['name'] = 'params[cron_weekly]';
$options['value'] = $vars['entity']->cron_weekly ? $vars['entity']->cron_weekly : 'no';
echo elgg_view('input/dropdown', $options) . " " . elgg_echo('rssimport:allow:cron:weekly') . "<br>";

echo "<br><br>";