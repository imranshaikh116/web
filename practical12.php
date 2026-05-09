<?php
  $name = "Student";
  $currentDate = date("l, d F Y");
  $currentTime = date("h:i:s A");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="practical12.css">
</head>
<body>

  <div class="dashboard">
    <h1>📊 Dashboard</h1>
    <div class="card">
      <h2>Welcome, <?php echo $name; ?>!</h2>
      <p>We are glad to have you here.</p>
      <hr>
      <p><b>📅 Date:</b> <?php echo $currentDate; ?></p>
      <p><b>🕐 Time:</b> <?php echo $currentTime; ?></p>
    </div>
  </div>

</body>
</html>
