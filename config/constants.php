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
define('M_START_MEMORY', memory_get_usage());
define('M_START_TIME', microtime(true));

// System wide constants
const DS = DIRECTORY_SEPARATOR;
define('M_PATH_ROOT', dirname(__DIR__) . DS);
const M_PATH_CONFIG = __DIR__ . DS;
const M_PATH_DATA = M_PATH_ROOT . 'data' . DS;

const M_PATH_PUBLIC = M_PATH_ROOT . 'public' . DS;
const M_PATH_CACHE = M_PATH_DATA . 'cache' . DS;
const M_PATH_LOG = M_PATH_DATA . 'logs' . DS;

// System files
const M_FILE_CONFIG_CACHE = M_PATH_CACHE . 'system-config.cache';
const M_FILE_CONFIG_ROUTES = M_PATH_CONFIG . 'routes.php';
