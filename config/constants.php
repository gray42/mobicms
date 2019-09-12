<?php

declare(strict_types=1);

/*
 * This file is part of mobiCMS Content Management System.
 *
 * @copyright   Oleg Kasyanov <dev@mobicms.net>
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 */

const DEBUG = true;

// Profiling
define('CMS_START_MEMORY', memory_get_usage());
define('CMS_START_TIME', microtime(true));

// System wide constants
define('CMS_PATH_ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
const CMS_PATH_CONFIG = __DIR__ . DIRECTORY_SEPARATOR;
const CMS_PATH_SYSTEM = CMS_PATH_ROOT . 'mobicms' . DIRECTORY_SEPARATOR;
const CMS_PATH_DATA = CMS_PATH_ROOT . 'data' . DIRECTORY_SEPARATOR;

const CMS_PATH_PUBLIC = CMS_PATH_ROOT . 'public' . DIRECTORY_SEPARATOR;
const CMS_PATH_CACHE = CMS_PATH_DATA . 'cache' . DIRECTORY_SEPARATOR;
const CMS_PATH_LOG = CMS_PATH_DATA . 'logs' . DIRECTORY_SEPARATOR;

// System files
const CMS_FILE_CONFIG_CACHE = CMS_PATH_CACHE . 'system-config.cache';
const CMS_FILE_CONFIG_ROUTES = CMS_PATH_CONFIG . 'routes.php';
