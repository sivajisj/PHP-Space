<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
// $fruits = ["Apple", "Orange", "Banana"];
// echo json_encode($fruits);
// $fruits[] = "WaterMelon";
// $fruits[1] = "papaya";
// echo json_encode($fruits[1]);
// echo "<br>";
// echo json_encode($fruits);
// array_splice($fruits, 0, 2);
// echo "<br>";

// echo json_encode($fruits[1]);
// echo json_encode($fruits);


// $tasks = [
//     "laundry" => "Daniel",
//     "trash" => "Frida",
//     "vacuum" => "Becca"
// ];


// echo "<br>";
// print_r(json_encode($tasks));
// echo "</br>";
// echo count($tasks);


// Built-in Functions

// $string = "Hello World!";
// echo strlen($string);
// echo "</br>";
// echo strchr($string,3);
// echo "</br>";
// echo strcmp($string, "Hello World!");
// echo "</br>";
// echo strpos($string,'o');
// echo "</br>";
// echo str_replace("World!", "sj", $string);
// echo "</br>";
// echo $string;
// echo "</br>";
// echo strrev($string);
// echo "</br>";
// echo strtolower($string);
// echo "</br>";
// echo substr($string,3,-2);
// echo "</br>";
// echo json_encode(explode(" ",$string));
// echo "</br>";
// echo strlen($string);
// echo "</br>";
// echo date('Y-m-d H:i:s')



// User Defined Functions

function say_hello($name) : string {
    return "Hello " . $name;
}
$greet =  say_hello('Jonas');
echo $greet;
?> 
    
</body>
</html>