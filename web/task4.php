<?php

echo '<br>';
echo '<div class="container">';
echo '<br>';
$first = mt_rand(1, 6);
$second = mt_rand(1, 6);
$dice = ["0", "My dear!", "You are not the worst!", "God loves you!", 
"Nice try ;)", "Great job :)", "Lucky bastard! :D"];
$arrlength = count($dice) + 2;

if ($first == $second) {
  echo '<h1 style="text-align: center; color: red">Jackpot</h1>';
} else {
    for ($i = 1; $i < $arrlength; $i++) {
      if ($i == $first || $i == $second) {
        echo "$i $dice[$i] <br>";
      }
    }
}
echo '<br>';
echo '</div>';

include dirname(__DIR__) . '/web/footer.tpl.php';

?>