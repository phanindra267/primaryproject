<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); // Sorting in descending order

foreach ($cars as $car) {
    echo $car . "<br>"; // Display each car in a new line
}

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers); // Sorting numbers in descending order

foreach ($numbers as $num) {
    echo $num . "<br>"; // Display each number in a new line
}
?>
