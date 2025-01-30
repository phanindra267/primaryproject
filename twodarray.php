<?php
$cars=array(array("volov",12,12.5),array("BMW",13,13.5),array("Audi",14,14.5));
// foreach($cars as $car){
//     echo "Car: ".$car[0].", Price: ".$car[1].", Quantity:   ".$car[2]."<br>";
// }
for($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo $cars[$row][$col]." ";
    }
    echo "<br>";
}



$name=array("manish","sagar","sachin");
$marks=array(12,13,14);  
print_r(array_combine($name,$marks));

$coures=array("php","java","c++");
print_r(array_chunk($coures,2));
print_r(array_count_values($coures));
?>