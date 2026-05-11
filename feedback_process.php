<?php
$name     = htmlspecialchars($_POST["name"]);
$email    = htmlspecialchars($_POST["email"]);
$rating   = htmlspecialchars($_POST["rating"]);
$feedback = htmlspecialchars($_POST["feedback"]);
$date     = date("l, d F Y");
$time     = date("h:i:s A");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Feedback Received</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 450px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { text-align: center; color: green; }
    table { width: 100%; border-collapse: collapse; margin-top: 16px; }
    td { padding: 9px 10px; border-bottom: 1px solid #eee; }
    td:first-child { font-weight: bold; width: 35%; }
    .datetime { background: #eaf0fb; padding: 10px; border-radius: 4px; margin-top: 14px; font-size: 0.93em; }
    a { display: block; text-align: center; margin-top: 16px; color: #2c7be5; }
  </style>
</head>
<body>
<div class="card">
  <h2>Thank You for Your Feedback!</h2>
  <table>
    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
    <tr><td>Rating</td><td><?php echo $rating; ?></td></tr>
    <tr><td>Feedback</td><td><?php echo $feedback; ?></td></tr>
  </table>
  <div class="datetime">
    <b>Submitted on:</b> <?php echo $date; ?><br>
    <b>Time:</b> <?php echo $time; ?>
  </div>
  <a href="feedback_form.html">Submit Another</a>
</div>
</body>
</html>
