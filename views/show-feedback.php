<!-- UI FOR SHOW THE SPECIFIC USING THEIR UNIQUE ID. -->


<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/show.css">
</head>

<body>
  <div class="card">
    <h2>Feedback Details</h2>

    <div class="info">
      <span class="label">Name:</span>
      <span class="value"><?= $feedback['name'] ?></span>
    </div>

    <div class="info">
      <span class="label">Course & Section:</span>
      <span class="value"><?= $feedback['course_year_section'] ?></span>
    </div>

    <div class="info">
      <span class="label">Subject:</span>
      <span class="value"><?= $feedback['subject'] ?></span>
    </div>

    <div class="info">
      <span class="label">Feedback:</span>
      <span class="value"><?= $feedback['feedback'] ?></span>
    </div>
    <div class="btn-container">
      <a href="/list" class="back">← Back to List</a>
      <a href="/feedback/edit?id=<?= $feedback['id'] ?>" class="edit">Edit</a>
    </div>

  </div>
</body>

</html>