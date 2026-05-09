<?php
  $str = "Hello World from PHP";

  $reversed  = strrev($str);
  $length    = strlen($str);
  $substring = substr($str, 6, 5); // "World"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP String Manipulation</title>
  <link rel="stylesheet" href="practical14.css">
</head>
<body>

  <div class="container">
    <h2>PHP String Manipulation</h2>

    <table>
      <tr>
        <th>Operation</th>
        <th>Result</th>
      </tr>
      <tr>
        <td>Original String</td>
        <td><?php echo $str; ?></td>
      </tr>
      <tr>
        <td>Reverse (<code>strrev()</code>)</td>
        <td><?php echo $reversed; ?></td>
      </tr>
      <tr>
        <td>Length (<code>strlen()</code>)</td>
        <td><?php echo $length; ?></td>
      </tr>
      <tr>
        <td>Substring (<code>substr($str, 6, 5)</code>)</td>
        <td><?php echo $substring; ?></td>
      </tr>
    </table>
  </div>

</body>
</html>
