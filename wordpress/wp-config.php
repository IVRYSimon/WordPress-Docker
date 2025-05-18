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

// Additional caching and performance-related configurations
define('WP_CACHE_KEY_SALT', 'your_unique_key_salt');
define('WP_REDIS_MAXTTL', 3600);
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_MAX_RETRIES', 3);
define('WP_REDIS_BACKOFF', 'exponential');
define('WP_REDIS_GRACEFUL', true);
define('WP_REDIS_GLOBAL_GROUPS', ['users', 'userlogins']);
define('WP_REDIS_IGNORED_GROUPS', ['counts', 'plugins']);
define('WP_REDIS_DISABLED', false);
