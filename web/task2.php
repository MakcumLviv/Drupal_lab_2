
<br>
  <div class="container">
    <form action="/?file=task2.php" method="post">
      <input type="number" name="katet">
      <input type="number" name="katet2">
      <input type="number" name="gipot">
      <input type="submit">
    </form>
  </div>    


<?php

function pythagoreanTheorem() {
  if (!empty($_POST['katet'] && $_POST['katet2'] && $_POST['gipot'])) {
    $k1 = $_POST['katet'];
    $k2 = $_POST['katet2'];
    $g = $_POST['gipot'];
    $r = $k1*$k1+$k2*$k2 ." = ". $g*$g;
    echo  "<h1 style='text-align: center; color: red'>$r</h1>";
  }
}

pythagoreanTheorem();

?>