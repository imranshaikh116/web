<?php
  $name = "Student";
  $date = date("l, d F Y");
  $time = date("h:i:s A");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body { font-family: Arial, sans-serif; background: #eaf0fb; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
    .card { background: white; padding: 36px 48px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.15); text-align: center; }
    h1 { color: #1a3c6e; }
    p { color: #555; font-size: 1.1em; margin: 8px 0; }
    .time { font-size: 1.4em; font-weight: bold; color: #2c7be5; }
  </style>
</head>
<body>
<div class="card">
  <h1>Welcome, <?php echo $name; ?>!</h1>
  <p>Today is: <b><?php echo $date; ?></b></p>
  <p class="time"><?php echo $time; ?></p>
  <p>Have a great day!</p>
</div>
</body>
</html>
