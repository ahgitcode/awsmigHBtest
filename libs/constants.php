<?php

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/dynamic-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'aa12jnq7gbqg1ws.chpob1uzcqid.us-east-1.rds.amazonaws.com');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '123$%^&*');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Dynamic Website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>