<?php
  $str = "hello world from php programming";
  $numStr = "000056.8";

  // a) All uppercase
  $upper = strtoupper($str);

  // b) All lowercase
  $lower = strtolower($str);

  // c) First character uppercase
  $ucFirst = ucfirst($str);

  // d) First character of all words uppercase
  $ucWords = ucwords($str);

  // e) Remove leading zeroes
  $cleanNum = ltrim($numStr, "0");

  // f) Reverse, length, substring
  $reversed  = strrev($str);
  $length    = strlen($str);
  $substring = substr($str, 6, 5); // "world"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP String Operations</title>
  <link rel="stylesheet" href="practical19.css">
</head>
<body>

  <div class="container">
    <h2>PHP String Operations</h2>
    <p><b>Original String:</b> "<?php echo $str; ?>"</p>
    <p><b>Number String:</b> "<?php echo $numStr; ?>"</p>

    <table>
      <tr><th>Operation</th><th>Result</th></tr>
      <tr><td>a) All Uppercase (<code>strtoupper()</code>)</td><td><?php echo $upper; ?></td></tr>
      <tr><td>b) All Lowercase (<code>strtolower()</code>)</td><td><?php echo $lower; ?></td></tr>
      <tr><td>c) First Char Uppercase (<code>ucfirst()</code>)</td><td><?php echo $ucFirst; ?></td></tr>
      <tr><td>d) All Words First Char Upper (<code>ucwords()</code>)</td><td><?php echo $ucWords; ?></td></tr>
      <tr><td>e) Remove Leading Zeroes (<code>ltrim($str,"0")</code>)</td><td><?php echo $cleanNum; ?></td></tr>
      <tr><td>f1) Reverse (<code>strrev()</code>)</td><td><?php echo $reversed; ?></td></tr>
      <tr><td>f2) Length (<code>strlen()</code>)</td><td><?php echo $length; ?> characters</td></tr>
      <tr><td>f3) Substring (<code>substr($str,6,5)</code>)</td><td><?php echo $substring; ?></td></tr>
    </table>
  </div>

</body>
</html>
