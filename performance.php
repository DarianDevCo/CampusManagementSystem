<?php
include 'functions.php';

$students = [

    "John" => [70, 80, 65, 90, 88, 76],
    "Mary" => [40, 55, 60, 45, 50, 58],
    "Peter" => [90, 95, 93, 89, 92, 96],
    "Lisa" => [30, 45, 40, 38, 50, 42]

];

$highestAverage = 0;
$lowestAverage = 100;
$classTotal = 0;
$topStudent = "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Performance Module</title>
</head>
<body>

<h1>Student Performance Module</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Student</th>
        <th>Average</th>
        <th>Result</th>
    </tr>

<?php

foreach($students as $studentName => $marks)
{
    $validMarks = true;

    foreach($marks as $mark)
    {
        if($mark < 0 || $mark > 100)
        {
            $validMarks = false;
        }
    }

    if(!$validMarks)
    {
        echo "<tr>";
        echo "<td>$studentName</td>";
        echo "<td colspan='2'>Invalid marks detected</td>";
        echo "</tr>";
        continue;
    }

    $average = calculateAverage($marks);

    $result = getResult($average);

    echo "<tr>";
    echo "<td>$studentName</td>";
    echo "<td>".number_format($average,2)."</td>";
    echo "<td>$result</td>";
    echo "</tr>";

    if($average > $highestAverage)
    {
        $highestAverage = $average;
        $topStudent = $studentName;
    }

    if($average < $lowestAverage)
    {
        $lowestAverage = $average;
    }

    $classTotal += $average;
}

$classAverage = $classTotal / count($students);

?>

</table>

<h2>Class Statistics</h2>

<p><strong>Top Student:</strong> <?php echo $topStudent; ?></p>
<p><strong>Highest Average:</strong> <?php echo number_format($highestAverage,2); ?></p>
<p><strong>Lowest Average:</strong> <?php echo number_format($lowestAverage,2); ?></p>
<p><strong>Class Average:</strong> <?php echo number_format($classAverage,2); ?></p>

<a href="index.php">Back to Main Menu</a>

</body>
</html>