<?php
  $str      = "hello world from php";
  $str2     = "   000056.8";

  $upper    = strtoupper($str);
  $lower    = strtolower("HELLO WORLD FROM PHP");
  $ucfirst  = ucfirst($str);
  $ucwords  = ucwords($str);
  $ltrimmed = ltrim($str2, " 0");   // remove leading spaces and zeros
  $reversed = strrev($str);
  $length   = strlen($str);
  $substr   = substr($str, 6, 5);  // "world"
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP String Operations</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 520px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { color: #1a3c6e; }
    table { width: 100%; border-collapse: collapse; margin-top: 14px; }
    th { background: #1a3c6e; color: white; padding: 10px; text-align: left; }
    td { padding: 9px 10px; border-bottom: 1px solid #ddd; }
    code { background: #eee; padding: 2px 5px; border-radius: 3px; }
  </style>
</head>
<body>
<div class="card">
  <h2>PHP String Operations</h2>
  <p><b>Input String:</b> <code>"<?php echo $str; ?>"</code></p>
  <table>
    <tr><th>Operation</th><th>Result</th></tr>
    <tr><td>a) All Uppercase</td><td><?php echo $upper; ?></td></tr>
    <tr><td>b) All Lowercase</td><td><?php echo $lower; ?></td></tr>
    <tr><td>c) First char Uppercase</td><td><?php echo $ucfirst; ?></td></tr>
    <tr><td>d) First char of each word Uppercase</td><td><?php echo $ucwords; ?></td></tr>
    <tr><td>e) Remove leading zeros from "000056.8"</td><td><?php echo $ltrimmed; ?></td></tr>
    <tr><td>f) Reverse</td><td><?php echo $reversed; ?></td></tr>
    <tr><td>f) Length</td><td><?php echo $length; ?></td></tr>
    <tr><td>f) Substring (pos 6, len 5)</td><td><?php echo $substr; ?></td></tr>
  </table>
</div>
</body>
</html>
