<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "EAIACCOUNT";

$conn  = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['name'])) { 
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
        header("refresh:3;url=HOME.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("refresh:3;url=HOME.html");
        exit();
    }
}
?>
