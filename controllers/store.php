<?php

// CRUD = CREATE LOGIC


require __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $courseYearSection = $_POST['course_year_section'];
  $subject = $_POST['subject'];
  $feedback = $_POST['feedback'];

  $command = "INSERT INTO feedbacks(name, course_year_section, subject, feedback) VALUES('$name', '$courseYearSection', '$subject', '$feedback')";

  $connection->query($command);  // Execute create query

  header('location: /list');  // Redirect after success

  exit();
}
