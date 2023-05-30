<?php

// Function to update the blog post
function BLOGEDIT($id, $title, $content, $image, $conn) {
    $sql = "UPDATE blogs SET title = ?, content = ?, image = ? WHERE id = ?";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the variables to the prepared statement
    mysqli_stmt_bind_param($stmt, 'sssi', $title, $content, $image, $id);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the update was successful
    if ($result) {
        echo "Your blog has been saved.";
    } else {
        echo "There was an error saving your blog.";
    }
}

// Connect to the database

$host = "localhost"; 
$username = "root";
$password = "";
$database = "EAIACCOUN"; 

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the POST request has been sent
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the function to edit the blog post
    BLOGEDIT($_POST["id"], $_POST["title"], $_POST["content"], $_POST["image"], $conn);
} else {
    echo "Your blog has not been saved. Try again."; 
}
?>





?>