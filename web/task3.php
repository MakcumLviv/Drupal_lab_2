<br>
  <div class="container">
    <h3> Введіть число </h3>
    <form action="/?file=task3.php" method="post">
      <input type="number" name="number">
      <input type="submit">
    </form>
  

<?php

function sumNumber() {
  $sum = 0; 
  if (!empty($_POST['number'])) {
    $number = $_POST['number'];
    for ($i = 0; $i < $number; $i++) {
      $sum += $i;
    }
  echo "Ваша сума $sum </div>";
  }
}

sumNumber();

?>

