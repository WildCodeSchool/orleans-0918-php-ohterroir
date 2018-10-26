<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Home' => [ // Controller
        ['show', '/', 'GET'], // action, url, method
    ],
    'HomeAdmin' => [
        ['show', '/admin', 'GET'],
    ],
    'ContactDetails' => [
        ['edit', '/admin/contact-details/edit/{id:\d+}', ['GET','POST']],
    ],
    'Dishes' => [ // Controller
        ['show', '/dishes', 'GET'], // action, url, method
    ],
    'Schedule' => [
        ['show', '/admin/schedules', 'GET'],
    ],
];
