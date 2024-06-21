<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('Quienes_Somos', 'Home::Quienes_Somos');
$routes->get('Acerca_De', 'Home::Acerca_De');
$routes->get('Registrarse', 'Home::Registrarse');
$routes->get('Ingresar', 'Home::Ingresar');
