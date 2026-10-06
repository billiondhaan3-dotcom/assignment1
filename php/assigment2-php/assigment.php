<?php

echo "<h1>PHP Assignment 2</h1>";

/* =========================================================
   QUESTION 1
   One Dimensional Array
   ========================================================= */

echo "<h2>Question 1</h2>";

$array1 = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

echo "<b>All elements:</b><br>";

foreach ($array1 as $value) {
    echo $value . " ";
}

echo "<br><br>";

$total = 0;

foreach ($array1 as $value) {
    $total += $value;
}

echo "Total of all elements: " . $total . "<br>";

$evenTotal = 0;

foreach ($array1 as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    }
}

echo "Total of even elements: " . $evenTotal . "<br>";

$oddTotal = 0;

foreach ($array1 as $value) {
    if ($value % 2 != 0) {
        $oddTotal += $value;
    }
}

echo "Total of odd elements: " . $oddTotal . "<br>";

$min = min($array1);

echo "Minimum element: " . $min . "<br>";
echo "Minimum positions: ";

foreach ($array1 as $index => $value) {
    if ($value == $min) {
        echo $index . " ";
    }
}

echo "<br>";

$max = max($array1);

echo "Maximum element: " . $max . "<br>";
echo "Maximum positions: ";

foreach ($array1 as $index => $value) {
    if ($value == $max) {
        echo $index . " ";
    }
}

echo "<hr>";


/* =========================================================
   QUESTION 2
   Two Dimensional Associative Array
   ========================================================= */

echo "<h2>Question 2</h2>";

$array2 = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($array2 as $rowName => $columns) {

    echo "<tr>";

    echo "<th>" . $rowName . "</th>";

    foreach ($columns as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<hr>";


/* =========================================================
   QUESTION 3
   Square Two Dimensional Array
   ========================================================= */

echo "<h2>Question 3</h2>";

$array3 = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

echo "<b>All elements:</b><br>";

foreach ($array3 as $row) {

    foreach ($row as $value) {
        echo $value . " ";
    }

    echo "<br>";
}

echo "<br>";

/* Total of odd elements */

$oddTotal3 = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value % 2 != 0) {
            $oddTotal3 += $value;
        }
    }
}

echo "Total of odd elements: " . $oddTotal3 . "<br>";

/* Total of even elements */

$evenTotal3 = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value % 2 == 0) {
            $evenTotal3 += $value;
        }
    }
}

echo "Total of even elements: " . $evenTotal3 . "<br><br>";

/* Total of each row */

echo "<b>Total of each row:</b><br>";

foreach ($array3 as $index => $row) {

    $rowTotal = 0;

    foreach ($row as $value) {
        $rowTotal += $value;
    }

    echo "Row " . ($index + 1) . ": " . $rowTotal . "<br>";
}

echo "<br>";

/* Total of each column */

echo "<b>Total of each column:</b><br>";

for ($column = 0; $column < 3; $column++) {

    $columnTotal = 0;

    for ($row = 0; $row < 3; $row++) {
        $columnTotal += $array3[$row][$column];
    }

    echo "Column " . ($column + 1) . ": " . $columnTotal . "<br>";
}

echo "<br>";

/* First diagonal */

$diagonal1 = 0;

for ($i = 0; $i < 3; $i++) {
    $diagonal1 += $array3[$i][$i];
}

echo "First diagonal total: " . $diagonal1 . "<br>";

/* Second diagonal */

$diagonal2 = 0;

for ($i = 0; $i < 3; $i++) {
    $diagonal2 += $array3[$i][2 - $i];
}

echo "Second diagonal total: " . $diagonal2 . "<br><br>";

/* Total of all elements */

$grandTotal = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {
        $grandTotal += $value;
    }
}

echo "Total of all elements: " . $grandTotal . "<br><br>";

/* Minimum */

$min3 = $array3[0][0];

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value < $min3) {
            $min3 = $value;
        }
    }
}

echo "Minimum element: " . $min3 . "<br>";
echo "Minimum positions: ";

foreach ($array3 as $i => $row) {

    foreach ($row as $j => $value) {

        if ($value == $min3) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }
    }
}

echo "<br>";

/* Maximum */

$max3 = $array3[0][0];

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value > $max3) {
            $max3 = $value;
        }
    }
}

echo "Maximum element: " . $max3 . "<br>";
echo "Maximum positions: ";

foreach ($array3 as $i => $row) {

    foreach ($row as $j => $value) {

        if ($value == $max3) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }
    }
}

echo "<hr>";


/* =========================================================
   QUESTION 4
   Student Information
   ========================================================= */

echo "<h2>Question 4</h2>";

$students = [

    "CA221" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    "CA221" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Student</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $id => $student) {

    echo "<tr>";

    echo "<td>" . $id . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

echo "<hr>";


/* =========================================================
   QUESTION 5
   Student Transcript
   ========================================================= */

echo "<h2>Question 5</h2>";

$transcript = [

    "Semester 1" => [

        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ],

    "Semester 2" => [

        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],

        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ]
];

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";

foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $data) {

        echo "<tr>";

        echo "<td>" . $semester . "</td>";
        echo "<td>" . $course . "</td>";
        echo "<td>" . $data["CW1"] . "</td>";
        echo "<td>" . $data["MidTerm"] . "</td>";
        echo "<td>" . $data["CW2"] . "</td>";
        echo "<td>" . $data["Final"] . "</td>";
        echo "<td>" . $data["Total"] . "</td>";
        echo "<td>" . $data["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>