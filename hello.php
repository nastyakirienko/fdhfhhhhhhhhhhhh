<?php
$numbersArray = [];

for ($i = 1; $i <= 10; $i++) {
    $numbersArray[$i] = $i * $i;
}

foreach ($numbersArray as $key => $value) {
    echo "Ключ: " . $key . ", Значение: " . $value . "\n";
}
?>



