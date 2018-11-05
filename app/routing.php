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
        ['show', '/admin/contact-details', 'GET'],
        ['edit', '/admin/contact-details/edit/{id:\d+}', ['GET','POST']],
    ],
    'Dishes' => [ // Controller
        ['show', '/dishes', 'GET'], // action, url, method
    ],
<<<<<<< HEAD
=======
    'DishCategory' => [ // Controller
        ['add', '/admin/categorie-plats/ajouter', ['GET','POST']],
    ], 
>>>>>>> 10f648b6d02f9b43d24ccddcf400585229488a50
    'Grower' => [
        ['show', '/grower', 'GET'],
    ],
];
