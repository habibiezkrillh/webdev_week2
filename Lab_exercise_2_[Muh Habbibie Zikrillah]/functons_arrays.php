<?php
function greet($name) {
    return "Hello, " . $name . "!";
}

$students = ["Adelyn", "Aditya", "Ryan", "Tino", "Calvino"];

foreach ($students as $student) {
    echo greet($student) . "<br>";
}
?>
