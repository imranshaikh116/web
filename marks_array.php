<?php
  $subjects = ["DBMS", "Microprocessor", "Web Technology", "TOC", "OS"];
  $marks    = [88, 76, 82, 65, 71];
  $max_marks = 100;
  $total_subjects = count($marks);

  $total      = array_sum($marks);
  $max_total  = $max_marks * $total_subjects;
  $percentage = ($total / $max_total) * 100;
  $max        = max($marks);
  $max_sub    = $subjects[array_search($max, $marks)];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Marks</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 420px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { color: #1a3c6e; }
    table { width: 100%; border-collapse: collapse; margin: 14px 0; }
    th { background: #1a3c6e; color: white; padding: 9px; text-align: left; }
    td { padding: 9px; border-bottom: 1px solid #ddd; }
    .highlight { background: #d4efdf; font-weight: bold; }
    .summary p { margin: 6px 0; }
  </style>
</head>
<body>
<div class="card">
  <h2>Student Subject Marks</h2>
  <table>
    <tr><th>Subject</th><th>Marks</th></tr>
    <?php for ($i = 0; $i < $total_subjects; $i++): ?>
    <tr <?php if ($marks[$i] === $max) echo 'class="highlight"'; ?>>
      <td><?php echo $subjects[$i]; ?></td>
      <td><?php echo $marks[$i]; ?></td>
    </tr>
    <?php endfor; ?>
  </table>
  <div class="summary">
    <p><b>Maximum Marks:</b> <?php echo $max; ?> (<?php echo $max_sub; ?>)</p>
    <p><b>Total:</b> <?php echo $total; ?> / <?php echo $max_total; ?></p>
    <p><b>Percentage:</b> <?php echo number_format($percentage, 2); ?>%</p>
  </div>
</div>
</body>
</html>
