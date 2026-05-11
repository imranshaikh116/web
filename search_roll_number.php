<?php
$roll_numbers = [101, 102, 103, 104, 105, 106, 107, 108, 109, 110];

$search = "";
$found  = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $search = (int)$_POST["roll"];
  $found  = in_array($search, $roll_numbers);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Roll Number</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 40px; }
    .card { background: white; padding: 28px; width: 380px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    h2 { text-align: center; }
    label { display: block; margin-top: 14px; font-weight: bold; }
    input[type="number"] { width: 100%; padding: 8px; margin-top: 4px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    input[type="submit"] { margin-top: 18px; width: 100%; padding: 10px; background: #2c7be5; color: white; border: none; border-radius: 4px; font-size: 1em; cursor: pointer; }
    input[type="submit"]:hover { background: #1a5cbf; }
    .result { margin-top: 16px; padding: 10px; border-radius: 4px; text-align: center; font-weight: bold; }
    .found { background: #d4efdf; color: green; }
    .notfound { background: #fadbd8; color: red; }
    .array-list { margin-top: 12px; color: #555; font-size: 0.92em; }
  </style>
</head>
<body>
<div class="card">
  <h2>Search Roll Number</h2>
  <p class="array-list"><b>Available Roll Numbers:</b> <?php echo implode(", ", $roll_numbers); ?></p>

  <form method="POST">
    <label>Enter Roll Number</label>
    <input type="number" name="roll" placeholder="e.g. 105" value="<?php echo $search; ?>">
    <input type="submit" value="Search">
  </form>

  <?php if ($found !== null): ?>
    <div class="result <?php echo $found ? 'found' : 'notfound'; ?>">
      <?php
        if ($found) {
          echo "Roll Number $search FOUND in the array!";
        } else {
          echo "Roll Number $search NOT FOUND in the array.";
        }
      ?>
    </div>
  <?php endif; ?>
</div>
</body>
</html>
