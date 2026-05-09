<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name       = htmlspecialchars($_POST["name"]);
  $email      = htmlspecialchars($_POST["email"]);
  $mobile     = htmlspecialchars($_POST["mobile"]);
  $college    = htmlspecialchars($_POST["college"]);
  $project    = htmlspecialchars($_POST["project"]);
  $category   = htmlspecialchars($_POST["category"]);
  $team_size  = htmlspecialchars($_POST["team_size"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Details</title>
  <link rel="stylesheet" href="practical13.css">
</head>
<body>

  <div class="container">
    <h2>Registration Submitted Successfully!</h2>
    <table>
      <tr><th>Field</th><th>Details</th></tr>
      <tr><td>Name</td><td><?php echo $name; ?></td></tr>
      <tr><td>Email</td><td><?php echo $email; ?></td></tr>
      <tr><td>Mobile</td><td><?php echo $mobile; ?></td></tr>
      <tr><td>College</td><td><?php echo $college; ?></td></tr>
      <tr><td>Project Title</td><td><?php echo $project; ?></td></tr>
      <tr><td>Category</td><td><?php echo $category; ?></td></tr>
      <tr><td>Team Size</td><td><?php echo $team_size; ?></td></tr>
    </table>
    <a href="practical13.html">← Go Back</a>
  </div>

</body>
</html>
