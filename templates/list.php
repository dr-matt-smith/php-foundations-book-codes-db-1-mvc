<!DOCTYPE html>
<html><head><title>list page</title>
</head><body>

<h1>List of movies</h1>
<ul>

<?php   foreach($movies as $movie): ?>

<li>
    <?= $movie->getTitle() ?>
</li>

<?php   endforeach;                 ?>
</ul>
