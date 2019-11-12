<?php

declare(strict_types=1);

/*
 * This file is part of mobiCMS Content Management System.
 *
 * @copyright   Oleg Kasyanov <dev@mobicms.net>
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 */

use Mobicms\System\Container\Factory;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;
use Zend\Expressive\MiddlewareFactory;

if (PHP_VERSION_ID < 70300) {
    die('<h1 style="color: #dd0000">ERROR: outdated version of PHP</h1>');
}

chdir(dirname(__DIR__));

// Displays an error if there are no dependencies
if (! is_file('vendor/autoload.php')) {
    die('<h3 style="color: #dd0000">ERROR: missing dependencies</h3>');
}

require 'vendor/autoload.php';

// Handling Errors and Exceptions
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set('log_errors', 'On');
    ini_set('error_log', M_PATH_LOG . 'errors-' . date('Y-m-d') . '.log');
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'Off');
}

(function () {
    /** @var ContainerInterface $container */
    $container = Factory::getContainer();

    /** @var Application $app */
    $app = $container->get(Application::class);
    $factory = $container->get(MiddlewareFactory::class);

    // Execute programmatic/declarative middleware pipeline and routing configuration statements
    (require M_PATH_CONFIG . 'routes.php')($app, $factory, $container);

    $app->run();
})();
