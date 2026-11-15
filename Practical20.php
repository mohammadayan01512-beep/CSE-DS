<!-- Aim: Implement control statements, loops, arrays and functions in PHP. -->

<!DOCTYPE html>
<html>
<head>
    <title>PHP Concepts</title>
</head>
<body>

<h2>PHP Control Statements</h2>

<?php

// If-else
$num = 10;

if ($num % 2 == 0) {
    echo "Number is Even<br>";
} else {
    echo "Number is Odd<br>";
}

// For loop
echo "For Loop:<br>";

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Array
$subjects = array("HTML", "CSS", "JavaScript");

echo "Array Elements:<br>";

foreach ($subjects as $value) {
    echo $value . "<br>";
}

// Function
function add($a, $b) {
    return $a + $b;
}

echo "Addition = " . add(10, 20);

?>

</body>
</html>
