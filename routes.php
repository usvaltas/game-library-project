<?php

//$router->define([
//    '' => 'controllers/index.php',
//    'games' => 'controllers/game-list.php',
//    'addPublisher' => 'controllers/addPublisher.php',
//    'addGame' => 'controllers/addGame.php'
//]);

$router->get('', 'controllers/index.php');
$router->get('games', 'controllers/game-list.php');
$router->post('addPublisher', 'controllers/addPublisher.php');
$router->post('addGame', 'controllers/addGame.php');