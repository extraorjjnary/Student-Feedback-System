<!--UI OF LITS OF ALL FEEDBACKS STORE IN MY DATABASE. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/list.css">
  <link rel="stylesheet" href="css/general.css">

</head>

<body>
  <a href="/menu" class="back-btn">← Back</a>
  <div class="table-box">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Year & Section</th>
          <th>Subject</th>
          <th>Feedback</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($feedbacks as $feedback) : ?>
          <tr>
            <td><?= $feedback['name'] ?></td>
            <td><?= $feedback['course_year_section'] ?></td>
            <td><?= $feedback['subject'] ?></td>
            <td><?= $feedback['feedback'] ?></td>
            <td class="action-cols">
              <a href="/feedback?id=<?= $feedback['id'] ?>">View</a>
              <form method="POST" action="/delete">
                <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
                <button>Delete</button>
              </form>
            </td>

          </tr>

        <?php endforeach; ?>


      </tbody>


    </table>
  </div>


</body>

</html>