<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);

  // String functions
  $nameUpper  = strtoupper($name);
  $nameLength = strlen($name);

  // Array of marks
  $marks = array(
    intval($_POST["m1"]),
    intval($_POST["m2"]),
    intval($_POST["m3"]),
    intval($_POST["m4"]),
    intval($_POST["m5"])
  );

  $total   = array_sum($marks);
  $average = $total / count($marks);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Result</title>
  <link rel="stylesheet" href="practical17.css">
</head>
<body>

  <div class="container">
    <h2>Student Result</h2>
    <table>
      <tr><th>Field</th><th>Value</th></tr>
      <tr><td>Name (Original)</td><td><?php echo $name; ?></td></tr>
      <tr><td>Name (Uppercase)</td><td><?php echo $nameUpper; ?></td></tr>
      <tr><td>Name Length</td><td><?php echo $nameLength; ?> characters</td></tr>
      <tr><td>Marks</td><td><?php echo implode(", ", $marks); ?></td></tr>
      <tr><td>Total Marks</td><td><?php echo $total; ?> / 500</td></tr>
      <tr><td>Average Marks</td><td><?php echo number_format($average, 2); ?></td></tr>
    </table>
    <a href="practical17.html">← Go Back</a>
  </div>

</body>
</html>
