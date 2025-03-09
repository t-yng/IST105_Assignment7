<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];
$e = $_GET['e'];

$output = [];
$result = 0;
exec("python3 data_management.py $a $b $c $d $e", $output, $result);

if($result !== 0) {
  echo "<h1 style='color: red'>$output[0]</h1>";
  echo "<a href='/form.php'>Back to form</a>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment#6 Process | IST105</title>
  </head>
  <body>
    <section>
      <h2>Inputs:</h2>
      <p>A: <?= $a ?></p>
      <p>B: <?= $b ?></p>
      <p>C: <?= $c ?></p>
      <p>D: <?= $d ?></p>
      <p>E: <?= $e ?></p>
    <h2>Results:</h2>
    <?php foreach($output as $key=>$value): ?>
      <?= $value ?>
    <?php endforeach ?>
    <a href='/form.php'>Back to form</a>
  </body>
</html>
