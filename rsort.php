<?php
echo "New method: by the asort() function";
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);
foreach ($age as $key => $value) {
    echo "$key : $value <br>"; 
}

echo "New method: by the ksort() function";
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);
foreach ($age as $key => $value) {
    echo "$key : $value <br>"; 
}

echo "New method: by the arsort() function";
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
foreach ($age as $key => $value) {
    echo "$key : $value <br>"; 
}

echo "New method: by the krsort() function";
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);
foreach ($age as $key => $value) {
    echo "$key : $value <br>"; 
}
?>
