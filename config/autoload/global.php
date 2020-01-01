<?php

declare(strict_types=1);

/*
 * This file is part of mobiCMS Content Management System.
 *
 * @copyright   Oleg Kasyanov <dev@mobicms.net>
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 */

use Laminas\ConfigAggregator\ConfigAggregator;

return [
    // Toggle the configuration cache
    ConfigAggregator::ENABLE_CACHE => true,

    // Enable debugging
    'debug'                        => false,

    'zend-expressive' => [
        // Provide templates for the error handling middleware
        'error_handler' => [
            'template_404'   => 'error::404',
            'template_error' => 'error::error',
        ],
    ],
];
