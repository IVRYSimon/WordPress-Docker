define('WP_CACHE', true);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
define('AUTOSAVE_INTERVAL', 300);
define('EMPTY_TRASH_DAYS', 7);
define('WP_POST_REVISIONS', 5);
define('DISALLOW_FILE_EDIT', true);
define('DISABLE_WP_CRON', true); // besser via externem Cronjob lösen

// Redis aktivieren
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
if ( getenv('REDIS_PASSWORD') ) {
    define('WP_REDIS_PASSWORD', getenv('REDIS_PASSWORD'));
}
define('WP_CACHE', true);