<?php
  $currentDate = date("l, d F Y");
  $currentTime = date("h:i:s A");
  $successMsg = "";
  $name = "";
  $feedbackText = "";
  $rating = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name         = htmlspecialchars($_POST["name"]);
    $feedbackText = htmlspecialchars($_POST["feedback"]);
    $rating       = htmlspecialchars($_POST["rating"]);
    $successMsg   = "success";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="practical24.css">
</head>
<body>

  <div class="container">
    <h2>Feedback Form</h2>

    <div class="datetime">
      <span>📅 <?php echo $currentDate; ?></span>
      <span>🕐 <?php echo $currentTime; ?></span>
    </div>

    <?php if ($successMsg === "success"): ?>
    <div class="success">
      <p>✅ Thank you, <b><?php echo $name; ?></b>! Your feedback has been submitted.</p>
      <p><b>Feedback:</b> <?php echo $feedbackText; ?></p>
      <p><b>Rating:</b> <?php echo $rating; ?> / 5</p>
    </div>
    <?php endif; ?>

    <form action="practical24.php" method="POST">

      <label>Your Name:</label>
      <input type="text" name="name" placeholder="Enter your name" required>

      <label>Email:</label>
      <input type="email" name="email" placeholder="Enter your email">

      <label>Rating (1-5):</label>
      <select name="rating" required>
        <option value="">-- Select Rating --</option>
        <option value="5">5 - Excellent</option>
        <option value="4">4 - Good</option>
        <option value="3">3 - Average</option>
        <option value="2">2 - Poor</option>
        <option value="1">1 - Very Poor</option>
      </select>

      <label>Your Feedback:</label>
      <textarea name="feedback" rows="4" placeholder="Write your feedback here..." required></textarea>

      <button type="submit">Submit Feedback</button>

    </form>
  </div>

</body>
</html>
