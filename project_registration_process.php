<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $team_name     = htmlspecialchars($_POST["team_name"]);
  $leader_name   = htmlspecialchars($_POST["leader_name"]);
  $email         = htmlspecialchars($_POST["email"]);
  $department    = htmlspecialchars($_POST["department"]);
  $project_title = htmlspecialchars($_POST["project_title"]);
  $description   = htmlspecialchars($_POST["description"]);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Details</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 450px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { text-align: center; color: green; }
    table { width: 100%; margin-top: 16px; border-collapse: collapse; }
    td { padding: 9px 10px; border-bottom: 1px solid #eee; }
    td:first-child { font-weight: bold; width: 40%; }
    a { display: block; text-align: center; margin-top: 18px; color: #2c7be5; }
  </style>
</head>
<body>
<div class="card">
  <h2>Registration Successful!</h2>
  <table>
    <tr><td>Team Name</td><td><?php echo $team_name; ?></td></tr>
    <tr><td>Leader Name</td><td><?php echo $leader_name; ?></td></tr>
    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
    <tr><td>Department</td><td><?php echo $department; ?></td></tr>
    <tr><td>Project Title</td><td><?php echo $project_title; ?></td></tr>
    <tr><td>Description</td><td><?php echo $description; ?></td></tr>
  </table>
  <a href="project_registration_form.html">Back to Form</a>
</div>
</body>
</html>
