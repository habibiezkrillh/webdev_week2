<?php
function greet($name, $day, $month, $year) {
    return "Hello, " . $name . "! You were born on ". $day . "/" . $month . "/" . $year . ".";
}
$students = [
    ["name" => "Habbibie", "day" => 30, "month" => 5, "year" => 2004],
    ["name" => "Eva", "day" => 23, "month" => 8, "year" => 2002],
    ["name" => "Fauzan", "day" => 17, "month" => 3, "year" => 2001],
    ["name" => "Yanto", "day" => 9, "month" => 11, "year" => 1999],
    ["name" => "Milano", "day" => 5, "month" => 6, "year" => 2002]
];

foreach($students as $student) {
    echo greet($student["name"], $student["day"], $student["month"], $student["year"]). "<br>";
}
?>