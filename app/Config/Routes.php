<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Product::index');
//$routes->get('product', 'Product::index');
$routes->get('product/delete/(:num)', 'Product::delete/$1');
$routes->get('product/create', 'Product::create');
$routes->post('product/store', 'Product::store');
$routes->get('product/edit/(:num)', 'Product::edit/$1');
