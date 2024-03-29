<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simple HTML Form</title>
<style type="text/css">
label {
font-weight: bold;
color: #300ACC;
}
.error {
color: red;
}
</style>
</head>
<body>
<p>Drew Gonzales</p>
<p>3/27/2023</p>
<p>Professor Lasky</p>
<p>CIS-12 LAB 2</p>
<p>Dynamic Programming[PHP]</p>
<p>SCRIPT 2.4</p>
<p>CLASS CODE 47060</p> 
<?php

// Validate the name:
if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
} else {
    $name = NULL;
    echo '<p class="error">You forgot to enter your name!</p>';
}

// Validate the email:
if (!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
} else {
    $email = NULL;
    echo '<p class="error">You forgot to enter your email address!</p>';
}

// Validate the comments:
if (!empty($_REQUEST['comments'])) {
    $comments = $_REQUEST['comments'];
} else {
    $comments = NULL;
    echo '<p class="error">You forgot to enter your comments!</p>';
}

// Validate the gender:
if (isset($_REQUEST['gender'])) {
    $gender = $_REQUEST['gender'];

    if ($gender == 'M') {
        $greeting = '<p><strong>Good day, Sir!</strong></p>';
    } elseif ($gender == 'F') {
        $greeting = '<p><strong>Good day, Madam!</strong></p>';
    } else { // Unacceptable value.
        $gender = NULL;
        echo '<p class="error">Gender should be either "M" or "F"!</p>';
    }

} else { // $_REQUEST['gender'] is not set.
    $gender = NULL;
    echo '<p class="error">You forgot to select your gender!</p>';
}

// If everything is OK, print the message:
if ($name && $email && $gender && $comments) {
    echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
    <pre>$comments</pre>
    <p>We will reply to you at <em>$email</em>.</p>\n";
    echo $greeting;
} else { // Missing form value.
    echo '<p class="error">Please go back and fill out the form again.</p>';
}

?>
</body>
</html>
