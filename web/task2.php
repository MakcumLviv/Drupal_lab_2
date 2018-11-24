<?php

echo '<br>';
echo '<div class="container">';
echo '<br>';
echo '<form action="index.php" method="post">
     <input type="number" name="katet">
     <input type="number" name="katet2">
     <input type="number" name="gipot">
     <input type="submit">
     </form>';

function pythagoreanTheorem() {
  if (!empty($_POST['katet'] && $_POST['katet2'] && $_POST['gipot'])) {
    $k1 = $_POST['katet'];
    $k2 = $_POST['katet2'];
    $g = $_POST['gipot'];
    $r = $k1*$k1+$k2*$k2 ." = ". $g*$g;
    echo $r;
  }
}

pythagoreanTheorem();

echo '<br>';
echo '</div>';

include dirname(__DIR__) . '/web/footer.tpl.php';

?>