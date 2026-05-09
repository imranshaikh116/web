<?php
  $rollNumbers = array(101, 102, 103, 104, 105, 106, 107, 108);

  $searchRoll = intval($_POST["roll"]);

  if (in_array($searchRoll, $rollNumbers)) {
    $result = "Roll Number <b>" . $searchRoll . "</b> was FOUND in the array.";
    $status = "found";
  } else {
    $result = "Roll Number <b>" . $searchRoll . "</b> was NOT FOUND in the array.";
    $status = "notfound";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Result</title>
  <link rel="stylesheet" href="practical18.css">
</head>
<body>
  <div class="container">
    <h2>Search Result</h2>
    <p>Available Roll Numbers: <?php echo implode(", ", $rollNumbers); ?></p>
    <p class="<?php echo $status; ?>"><?php echo $result; ?></p>
    <a href="practical18.html">← Search Again</a>
  </div>
</body>
</html>
