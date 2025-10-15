<?php

require __DIR__ . '/../config/database.php';

$id = $_GET['id'];


$result = $connection->query("SELECT * from feedbacks where id = $id");

$feedback = $result->fetch_assoc();


require __DIR__ . '/../views/edit-feedback.php';
