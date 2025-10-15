<?php

// CRUD = DELETE LOGIC


require __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $id = $_POST['id'];

  $connection->query("DELETE from feedbacks where id = $id"); // Execute delete query


  header('location: /list');  // Redirect after deletion
  exit;
}
