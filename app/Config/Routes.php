<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// User Management Routes

// Display all users
$routes->get('/users', 'User::index');

// Add new user
$routes->get('/adduser', 'User::addUser');
$routes->post('/adduser', 'User::addUser');

// Edit user
$routes->get('/edituser/(:num)', 'User::editUser/$1');
$routes->post('/edituser/(:num)', 'User::editUser/$1');

// Delete user
$routes->get('/deleteuser/(:num)', 'User::deleteUser/$1');
