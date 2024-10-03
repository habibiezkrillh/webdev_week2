<?php
$name = "Muh Habbibie Zikrillah";
$sex = "male";
$gpa = 3.41;
$isStudent = true;

$currentYear = date("Y");
$currentMonth = date("m");
$currentDay = date("d");

function calculateAge($birthDate){
    global $currentYear, $currentMonth, $currentDay;

    list($birthYear, $birthMonth, $birthDay) = explode("-", $birthDate);

    $age = $currentYear - $birthYear;

    if(($birthMonth > $currentMonth) || ($birthMonth == $currentMonth && $birthDay > $currentDay)) {
        $age--;
    }

    return $age;
}

$birthDate = "2004-05-30";

$age = calculateAge($birthDate);

echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Sex: $sex<br>";
echo "GPA: $gpa<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";
?>
