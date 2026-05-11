<?php
  $str = "Hello World from PHP";

  $reversed  = strrev($str);
  $length    = strlen($str);
  $substring = substr($str, 6, 5);   // "World"
?>
<!DOCTYPE html>
<html>
<head>
  <title>String Manipulation</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 450px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { color: #1a3c6e; }
    table { width: 100%; border-collapse: collapse; margin-top: 14px; }
    th { background: #1a3c6e; color: white; padding: 9px; text-align: left; }
    td { padding: 9px; border-bottom: 1px solid #ddd; }
  </style>
</head>
<body>
<div class="card">
  <h2>PHP String Manipulation</h2>
  <p><b>Original String:</b> "<?php echo $str; ?>"</p>
  <table>
    <tr><th>Operation</th><th>Result</th></tr>
    <tr><td>Reverse</td><td><?php echo $reversed; ?></td></tr>
    <tr><td>Length</td><td><?php echo $length; ?> characters</td></tr>
    <tr><td>Substring (pos 6, len 5)</td><td><?php echo $substring; ?></td></tr>
  </table>
</div>
</body>
</html>
