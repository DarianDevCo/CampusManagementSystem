<?php

// ================= PARKING CONSTANTS =================
define("STUDENT_PERMIT", 450);
define("STAFF_PERMIT", 750);
define("VISITOR_PERMIT", 100);

define("MAX_PARKING_CAPACITY", 100);

// ================= LIBRARY FUNCTIONS =================

function calculateFine($category, $daysLate)
{
    $rates = [
        "Textbook" => 5,
        "Journal" => 3,
        "Reference Book" => 10
    ];

    if(isset($rates[$category]))
    {
        return $rates[$category] * $daysLate;
    }

    return 0;
}

function borrowBook(&$users, $userName, $bookTitle, $category)
{
    if($users[$userName]["fine"] > 200)
    {
        echo "<p style='color:red;'>$userName cannot borrow books due to outstanding fines.</p>";
        return;
    }

    $users[$userName]["books"][] = [
        "title" => $bookTitle,
        "category" => $category,
        "returned" => false
    ];

    echo "<p>$userName borrowed $bookTitle successfully.</p>";
}

function returnBook(&$users, $userName, $bookIndex, $daysLate)
{
    if(isset($users[$userName]["books"][$bookIndex]))
    {
        $book = &$users[$userName]["books"][$bookIndex];

        if(!$book["returned"])
        {
            $fine = calculateFine($book["category"], $daysLate);

            $users[$userName]["fine"] += $fine;
            $book["returned"] = true;

            echo "<p>$userName returned {$book['title']}.</p>";
            echo "<p>Fine Charged: R$fine</p>";
        }
    }
}

function printUserSummary($users)
{
    echo "<h2>User Summary</h2>";

    foreach($users as $name => $info)
    {
        echo "<h3>$name</h3>";

        echo "Outstanding Fine: R".$info["fine"]."<br>";

        echo "<strong>Books:</strong><br>";

        foreach($info["books"] as $book)
        {
            echo "- ".$book["title"]." (".$book["category"].")<br>";
        }

        echo "<hr>";
    }
}

// ================= PERFORMANCE FUNCTIONS =================

function calculateAverage($marks)
{
    $sum = array_sum($marks);
    return $sum / count($marks);
}

function getResult($average)
{
    if($average >= 75)
    {
        return "Distinction";
    }
    elseif($average >= 50)
    {
        return "Pass";
    }
    else
    {
        return "Fail";
    }
}

?>