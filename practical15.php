<?php
  $marks = array(78, 92, 55, 88, 70);
  $subjects = array("Mathematics", "Web Technology", "C Programming", "DBMS", "Communication");

  $total = array_sum($marks);
  $maxMarks = max($marks);
  $count = count($marks);
  $percentage = ($total / ($count * 100)) * 100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Marks</title>
  <link rel="stylesheet" href="practical15.css">
</head>
<body>

  <div class="container">
    <h2>Student Marks Report</h2>

    <table>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Subject</th>
          <th>Marks (out of 100)</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 0; $i < $count; $i++): ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <td><?php echo $subjects[$i]; ?></td>
          <td><?php echo $marks[$i]; ?></td>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>

    <div class="summary">
      <p><b>Total Marks:</b> <?php echo $total; ?> / <?php echo $count * 100; ?></p>
      <p><b>Maximum Marks (in any subject):</b> <?php echo $maxMarks; ?></p>
      <p><b>Percentage:</b> <?php echo number_format($percentage, 2); ?>%</p>
    </div>
  </div>

</body>
</html>
