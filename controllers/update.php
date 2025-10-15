<?php

// CRUD = UPDATE LOGIC

require __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $id = $_POST['id'];

  $name = $_POST['name'];
  $course_year_section = $_POST['course_year_section'];
  $subject = $_POST['subject'];
  $feedback = $_POST['feedback'];


  $command = "UPDATE feedbacks SET name = '$name', course_year_section = '$course_year_section', subject = '$subject', feedback = '$feedback' WHERE id = $id";

  $connection->query($command);  // Execute update query


  header('location: /list');  // Redirect after update

  exit();
}
