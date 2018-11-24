<?php

echo '<br>';
echo '<div class="container">';
echo '<br>';
echo '<h3> Введіть число </h3>';
echo '<form action="index.php" method="post">
     <input type="number" name="number">
     <input type="submit">
     </form>';

function sumNumber() {
  $sum = 0;	
  if (!empty($_POST['number'])) {
    $number = $_POST['number'];
    for ($i = 0; $i < $number; $i++) {
      $sum += $i;
    }
  echo "Ваша сума $sum";
  }
}

sumNumber();
echo '<br>';
echo '</div>';

include dirname(__DIR__) . '/web/footer.tpl.php';

?>