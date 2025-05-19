define('WP_CACHE', true);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
define('AUTOSAVE_INTERVAL', 300);
define('EMPTY_TRASH_DAYS', 7);
define('WP_POST_REVISIONS', 5);
define('DISALLOW_FILE_EDIT', true);
define('DISABLE_WP_CRON', true); // besser via externem Cronjob lösen

// Redis aktivieren
define('WP_REDIS_CONFIG', [
    'host'          => 'redis',
    'port'          => 6379,
    'database'      => 0,
    'timeout'       => 1.0,
    'read_timeout'  => 1.0,
    'compression'   => 'zstd',
    'serializer'    => 'igbinary',
    'async_flush'   => true,
    'split_alloptions' => true,
    'prefetch'      => true,
    'debug'         => false,
]);
define('WP_REDIS_DISABLED', false);
