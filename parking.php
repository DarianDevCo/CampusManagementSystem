<?php
include 'functions.php';

$permitSales = [];

$applicants = [
    ["name"=>"John", "age"=>20, "type"=>"Student"],
    ["name"=>"Mary", "age"=>35, "type"=>"Staff"],
    ["name"=>"Peter", "age"=>17, "type"=>"Visitor"],
    ["name"=>"Sam", "age"=>25, "type"=>"Visitor"],
    ["name"=>"Lisa", "age"=>19, "type"=>"Student"]
];

$totalRevenue = 0;

$studentCount = 0;
$staffCount = 0;
$visitorCount = 0;

foreach($applicants as $applicant)
{
    if($applicant["age"] < 18)
    {
        echo "<p>{$applicant['name']} is under 18. Permit denied.</p>";
        continue;
    }

    switch($applicant["type"])
    {
        case "Student":
            $price = STUDENT_PERMIT;
            $studentCount++;
            break;

        case "Staff":
            $price = STAFF_PERMIT;
            $staffCount++;
            break;

        case "Visitor":
            $price = VISITOR_PERMIT;
            $visitorCount++;
            break;

        default:
            $price = 0;
    }

    $permitSales[] = [
        "name" => $applicant["name"],
        "type" => $applicant["type"],
        "price" => $price
    ];

    $totalRevenue += $price;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Parking Permit Module</title>
</head>
<body>

<h1>Parking Permit Module</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Permit Type</th>
        <th>Price</th>
    </tr>

    <?php
    foreach($permitSales as $sale)
    {
        echo "<tr>";
        echo "<td>".$sale["name"]."</td>";
        echo "<td>".$sale["type"]."</td>";
        echo "<td>R".$sale["price"]."</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Summary</h2>

<p>Student Permits Sold: <?php echo $studentCount; ?></p>
<p>Staff Permits Sold: <?php echo $staffCount; ?></p>
<p>Visitor Permits Sold: <?php echo $visitorCount; ?></p>

<h3>Total Revenue: R<?php echo $totalRevenue; ?></h3>

<p>Maximum Parking Capacity: <?php echo MAX_PARKING_CAPACITY; ?></p>

<a href="index.php">Back to Main Menu</a>

</body>
</html>