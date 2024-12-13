<?php
$name = "محمد";
$age = 21;
echo "<h1>مرحبًا، اسمي $name وعمري $age سنة.</h1>";

$age = 18;
if ($age >= 18) {
    echo  "<p> مرحبًا بك، يمكنك الدخول  .</p> ";
} else {
    echo "<p> عذرًا، يجب أن تكون أكبر من 18.</p>";
}

for ($i = 0; $i < 5; $i++) {
    echo "الرقم هو: $i <br>";
}


$i = 5;
while ($i < 10) {
    echo "الرقم هو: $i <br>";
    $i++;
}
###############################################
function sayHello($name) {
    echo "<h2> مرحبًا، $name! <h2>";
}

sayHello("محمد");

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}
$result = addNumbers(5, 10);
echo " الناتج هو: $result ";


$firstName = "PHP";
$lastName = "8.4";
echo "<p> :لغة </p>" . $firstName . " " . $lastName;

$text = "مرحبًا أحمد";
$position = strpos($text, "أحمد");
if ($position !== false) {
    echo "<P> وجدت 'أحمد' في الموقع: $position </P>";
} else {
    echo "<P> النص غير موجود. </P>";
}


?>