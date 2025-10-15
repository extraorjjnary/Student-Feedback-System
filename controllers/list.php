<?php

// CRUD = READ LOGIC

require __DIR__ . '/../config/database.php';


$result = $connection->query('SELECT * from feedbacks');


$feedbacks = [];

while ($row = $result->fetch_assoc()) {
  $feedbacks[] = $row;  // Fetch all rows into an array for the view

}

require __DIR__ . '/../views/list-feedback.php';  // Render the list page
