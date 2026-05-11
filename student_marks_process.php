<?php
$name = htmlspecialchars($_POST["name"]);
$marks = [
  (int)$_POST["m1"],
  (int)$_POST["m2"],
  (int)$_POST["m3"],
  (int)$_POST["m4"],
  (int)$_POST["m5"]
];

// String functions
$name_upper  = strtoupper($name);
$name_length = strlen($name);

// Array calculations
$total   = array_sum($marks);
$average = $total / count($marks);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Marks Result</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 420px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { color: green; text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 14px; }
    th { background: #2c3e50; color: white; padding: 9px; text-align: left; }
    td { padding: 9px; border-bottom: 1px solid #ddd; }
    .summary p { margin: 6px 0; }
    a { display: block; text-align: center; margin-top: 16px; color: #2c7be5; }
  </style>
</head>
<body>
<div class="card">
  <h2>Student Result</h2>

  <p><b>Name:</b> <?php echo $name; ?></p>
  <p><b>Name (Uppercase):</b> <?php echo $name_upper; ?></p>
  <p><b>Name Length:</b> <?php echo $name_length; ?> characters</p>

  <table>
    <tr><th>Subject</th><th>Marks</th></tr>
    <?php
    $sub = ["Subject 1","Subject 2","Subject 3","Subject 4","Subject 5"];
    for ($i = 0; $i < 5; $i++):
    ?>
    <tr><td><?php echo $sub[$i]; ?></td><td><?php echo $marks[$i]; ?></td></tr>
    <?php endfor; ?>
  </table>

  <div class="summary" style="margin-top:14px;">
    <p><b>Total Marks:</b> <?php echo $total; ?> / 500</p>
    <p><b>Average:</b> <?php echo number_format($average, 2); ?></p>
    <p><b>Percentage:</b> <?php echo number_format($average, 2); ?>%</p>
  </div>

  <a href="student_marks_form.html">Back</a>
</div>
</body>
</html>
