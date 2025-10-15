<!--UI FOR EDITING A SPECIFIC FEEDBACK. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/submit.css">
  <link rel="stylesheet" href="../css/general.css">


</head>

<body>
  <a href="/feedback?id=<?= $feedback['id'] ?>" class="back-btn">← Back</a>

  <div class="form-container">
    <form class="feedback-form" method="POST" action="/update">
      <input type="hidden" name="id" value="<?= $feedback['id'] ?>">

      <h1>Edit Feedback</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?= $feedback['name'] ?>">

      <label for="course_year_section">Year&Section:</label>
      <input type="text" id="course_year_section" name="course_year_section" value="<?= $feedback['course_year_section'] ?>">

      <label for="subject">Subject:</label>
      <input id="subject" name="subject" value="<?= $feedback['subject'] ?>">

      <label for="feedback">Feedback:</label>
      <textarea rows="2" id="feedback" name="feedback"><?= $feedback['feedback'] ?></textarea>

      <button type="submit">Update Feedback</button>

    </form>
  </div>

</body>

</html>