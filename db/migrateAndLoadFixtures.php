<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;

$movieRespository = new MovieRepository();

// (1) drop then create table
$movieRespository->dropTable();
$movieRespository->createTable();

// (2) delete any existing objects
$movieRespository->deleteAll();

// (3) create objects
$m1 = new Movie();
$m1->setTitle('Jaws');
$m1->setPrice(9.99);
$m1->setCategory('horror');

$m2 = new Movie();
$m2->setTitle('Jumanji');
$m2->setPrice(9.99);
$m2->setCategory('entertainment');

// (3) insert objects into DB
$movieRespository->create($m1);
$movieRespository->create($m2);

// (4) test objects are there
$movies = $movieRespository->findAll();
print '<pre>';
var_dump($movies);
