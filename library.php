<?php
include 'functions.php';

$users = [

    "Alice" => [
        "fine" => 50,
        "books" => []
    ],

    "Bob" => [
        "fine" => 250,
        "books" => []
    ],

    "Charlie" => [
        "fine" => 0,
        "books" => []
    ]
];

// Borrow books
borrowBook($users, "Alice", "PHP Basics", "Textbook");
borrowBook($users, "Bob", "Advanced Networks", "Journal");
borrowBook($users, "Charlie", "Database Systems", "Reference Book");

// Return books
returnBook($users, "Alice", 0, 4);
returnBook($users, "Charlie", 0, 2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Module</title>
</head>
<body>

<h1>Library Borrowing & Fine Module</h1>

<?php
printUserSummary($users);
?>

<a href="index.php">Back to Main Menu</a>

</body>
</html>