<!DOCTYPE html>
<html>
<head>
    <title>PHP Assignment 1</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #2c3e50;
        }

        .box {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #f80b0b;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        td {
            border: 1px solid #350ef5;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

<h1>PHP & MySQL - Assignment 1</h1>


<div class="box">

<h2>Question 1: Greatest and Smallest</h2>

<?php

$a = 15;
$b = 8;
$c = 20;

if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest = $greatest <br>";
echo "Smallest = $smallest";

?>

</div>


<div class="box">

<h2>Question 2: Divisible by 3 and 5</h2>

<?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by both 3 and 5.";
} elseif ($num % 3 == 0) {
    echo "$num is divisible by 3.";
} elseif ($num % 5 == 0) {
    echo "$num is divisible by 5.";
} else {
    echo "$num is divisible by neither 3 nor 5.";
}

?>

</div>


<div class="box">

<h2>Question 3: Odd Numbers from 2 to 20</h2>

<?php

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }

}

?>

<h2>Even Numbers from 35 to 7</h2>

<?php

for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }

}

?>

</div>


<div class="box">

<h2>Question 4: Numbers Divisible by 2 and 5</h2>

<?php

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}

?>

</div>


<div class="box">

<h2>Question 5: Reverse a Number</h2>

<?php

$num = 12345;
$reverse = 0;

while ($num > 0) {

    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = intdiv($num, 10);

}

echo "Reverse = $reverse";

?>

</div>


<div class="box">

<h2>Question 6: LCM</h2>

<?php

$a = 8;
$b = 12;

$lcm = $a;

while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "LCM of $a and $b = $lcm";

?>

</div>


<div class="box">

<h2>Question 7: HCF</h2>

<?php

$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }

}

echo "HCF of $a and $b = $hcf";

?>

</div>


<div class="box">

<h2>Question 8: Multiplication Table</h2>

<table>

<?php

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>" . ($i * $j) . "</td>";

    }

    echo "</tr>";

}

?>

</table>

</div>


<div class="box">

<h2>Question 9: Prime or Non-Prime</h2>

<?php

$num = 17;
$isPrime = true;

if ($num <= 1) {

    $isPrime = false;

} else {

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }

    }

}

if ($isPrime) {
    echo "$num is a Prime number.";
} else {
    echo "$num is a Non-Prime number.";
}

?>

</div>


<div class="box">

<h2>Question 10: Prime Numbers from 10 to 50</h2>

<?php

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }

    }

    if ($isPrime) {
        echo $num . " ";
    }

}

?>

</div>

</body>
</html>