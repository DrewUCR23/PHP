<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "EAIACCOUNT";

// Establishing a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the database connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == 'signin') {
        // Handle sign-in
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // User exists
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
                // Password is correct
                echo "Signed in successfully!";
                //this will reset the page back to the home once signed in
                header('Location: Home.html');
            } else {
                // Incorrect password
                echo "Incorrect password. Please try again.";
                // Redirect back to CONTACTPAGE after failed login attempt
                header('Refresh: 3; URL = SIGNIN.html');
            }
        } else {
            // User does not exist
            echo "Email does not exist. Please register.";
            // Redirect back to HOME.html after failed login attempt
            header('Refresh: 3; URL = SIGNIN.html');
        }
    }elseif ($action == 'register') {
        // Handle registration
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    
        if($password != $confirm_password) {
            // Passwords do not match
            echo "Passwords do not match. Please try again.";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
    
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
    
            if (mysqli_num_rows($result) > 0) {
                // User already exists
                echo "Email already exists. Please sign in.";
            } else {
                $query = "INSERT INTO users (username, email, password, registration_date) VALUES ('$username', '$email', '$password', NOW())";
                if (mysqli_query($conn, $query)) {
                    // User registered successfully
                    echo "Registered successfully!";
                    // Adding the refresh header
                    header('Refresh: 2; URL = SIGNIN.html');
                } else {
                    // Failed to register user
                    echo "Error: " . mysqli_error($conn);
                }
            }
        }
    }
    
}

// Close the database connection
mysqli_close($conn);
?>
