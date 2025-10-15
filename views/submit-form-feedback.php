<!-- UI FOR FORM FILL UP FOR FEEDBACKS. -->


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/submit.css">
  <link rel="stylesheet" href="css/general.css">


</head>

<body>
  <a href="/menu" class="back-btn">← Back</a>

  <div class="form-container">
    <form class="feedback-form" method="POST" action="/store">
      <h1>Student Feedback Form</h1>
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Enter your name" required>

      <label for="course_year_section">Year&Section:</label>
      <input type="text" name="course_year_section" placeholder="e.g. BSIS 3A or BSEd 1B" required>

      <label for="subject">Subject:</label>
      <input name="subject" placeholder="e.g. Web Development or Elective 2" required>

      <label for="feedback">Feedback:</label>
      <textarea rows="2" name="feedback" placeholder="Write your feedback..." required></textarea>

      <button type="submit">Submit Feedback</button>
    </form>
  </div>

</body>

</html>