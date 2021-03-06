<?php
define('SB_DS', DIRECTORY_SEPARATOR);
define('DB_TYPE', 'mysql');
define('DB_SERVER', '127.0.0.1');
define('DB_NAME', 'nuevabase');
define('DB_USER', 'root');
define('DB_PASS', '');
define('BASEPATH', dirname(__FILE__));
define('INCLUDE_DIR', BASEPATH . SB_DS . 'include');
define('ADM_INCLUDE_DIR', BASEPATH . SB_DS . 'admin' . SB_DS . 'include');
define('MODULES_DIR', BASEPATH . SB_DS . 'modules');
define('TEMPLATES_DIR', BASEPATH . SB_DS . 'templates');
define('ADM_TEMPLATES_DIR', BASEPATH . SB_DS . 'admin' . SB_DS . 'templates');
define('APPLICATIONS_DIR', BASEPATH . SB_DS . 'apps');
define('UPLOADS_DIR', BASEPATH . SB_DS . 'uploads');
define('TEMP_DIR', BASEPATH . SB_DS . 'temp');
define('BASEURL', 'http://localhost:8080/little-cms-master');
define('ADMIN_URL', BASEURL . '/admin');
define('MODULES_URL', BASEURL . '/modules');
define('TEMPLATES_URL', BASEURL . '/templates');
define('UPLOADS_URL', BASEURL . '/uploads');
define('DEVELOPMENT', 1);
define('SESSION_EXPIRE', 15 * 60); //15 minutes
define('LOG_FILE', BASEPATH . SB_DS . 'little-cms.log');
