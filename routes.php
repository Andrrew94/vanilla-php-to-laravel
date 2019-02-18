<?php

// $router->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-person.php' // only for post type
// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->post('names', 'controllers/add-person.php');
