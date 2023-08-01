Drew Gonzales 
3/27/2023
Professor Iasky 
LAB1 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CIS12 LAB 1</title>
</head>
<body>
    <!-- Drew Gonzales -->
    <p>This is standard HTML.</p>

    <?php
    // Steps 3-7 go here

    $file = $_SERVER['SCRIPT_FILENAME'];
    $user = $_SERVER['HTTP_USER_AGENT'];
    $server = $_SERVER['SERVER_SOFTWARE'];

    // Print the name of this script:
    echo "<p>You are running the file:<br><strong>$file</strong>.</p><br>\n";
    // Print the user's information:
    echo "<p>You are viewing this page using:<br><strong>$user</strong></p><br>\n";
    // Print the server's information:
    echo "<p>This server is running:<br><strong>$server</strong>.</p><br>\n";

    $first_name = 'Drew';
    $last_name = 'Gonzales';
    $whole_name = $first_name . ' ' . $last_name;

    // Replace this with your favorite movie.
    $movie = "Troy, 2004 Brad Pitt And Eric Bana";

    // Print out the given values.
    echo "<p>My name is <b>$whole_name</b> and my favorite movie is <em>$movie</em>.</p>";

    //PART 3 INTRODUCING NUMBERS 
    //SET VARIABLES
    $quantity = 30;
    $price = 119.95;
    $taxrate = .05;

    //CALCULATE THE TOTAL;
    $total = $quantity * $price; 
    $total = $total +($total * $taxrate);  //calculate and add the tax values accordingly

    //format the total value

    $total = number_format($total,2);

    // Print the results:
    echo '<p>You are purchasing <strong>' . $quantity . '</strong>
    widget(s) at a cost of <strong>$' . $price . '</strong> each.
    With tax, the total comes to <strong>$' . $total . '</strong>.</p>';

    //defining constant values inside of PHP

    define('TODAY', 'March 27th, 2023');

    // Print a message, using predefined constants and the TODAY constant:
    echo '<p>Today is ' . TODAY . '.<br>This server is running
    version <strong>' . PHP_VERSION . '</strong> of PHP on the
    <strong>' . PHP_OS . '</strong> operating system.</p>'; 
    ?>

</body>
</html>
