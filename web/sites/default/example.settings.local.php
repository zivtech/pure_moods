<?php
// Copy this to your settings.local.php file and modify.

$conf = array(
  'fetcher_environment' => 'local',
);

$settings['hash_salt'] = 'KRUUrkQItVbFPqlcxWIQgKT7O9Q13TX488URsRB-GBFRUoeu8G21R2gLDIUvlhL7u8CtiGA1gA';

$databases = array(
  'default' => array(
    'default' => array(
      'database' => 'puremoods',
      'username' => 'root',
      'password' => 'root',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
      'namespace' => 'Drupal\Core\Database\Driver\mysql',
    ),
  ),
);
$settings['container_yamls'] = array(
    '0' => '/usr/share/drush/commands/drush_fetcher/lib/Fetcher/Configurator/DrupalVersion/services.yml',
);
