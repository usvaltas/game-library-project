<?php
$publisherID = $_GET['publisherID'];

$publisherName = $gamesQueryBuilder->selectPublisherName($publisherID);

$games = $gamesQueryBuilder->selectAllGames($publisherID);

require 'views/game-list.view.php';
