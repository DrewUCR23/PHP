Drew Gonzales
4/6/2023
Professor Lasky
CIS 12 LAB 3
PHP (DYNAMIC WEB PROGRAMMING)
SCRIPT 3.5
CLASS CODE: 47060


<?php // Script 3.5 - calculator.php

$page_title = 'Triple Cost Calculator'; 
include('includes/header.html');

// Check for the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Minimal form validation that has been completed
    if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) &&
        is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) &&
        is_numeric($_POST['efficiency'])) {

        // Calculate the given results:
        $gallons = $_POST['distance'] / $_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance'] / 65;

        // Output the given results
        echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
<p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' .
            $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '.
If you drive at an average of 65 miles per hour, the trip will take approximately ' .
            number_format($hours, 2) . ' hours.</p>';

    } else { // Invalid submitted values.
        echo '<div class="page-header"><h1>Error!</h1></div>
<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }

} // End of main submission IF.

// Leave the PHP section and create the HTML form:
?>
<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
    <p>Distance (in miles): <input type="number" name="distance"></p>
    <p>Ave. Price Per Gallon: <input type="radio" name="gallon_price" value="3.00"> 3.00
        <input type="radio" name="gallon_price" value="3.50"> 3.50
        <input type="radio" name="gallon_price" value="4.00"> 4.00
    </p>
    <p>Fuel Efficiency: <select name="efficiency">
            <option value="10">Terrible</option>
            <option value="20">Decent</option>
            <option value="30">Very Good</option>
            <option value="50">Outstanding</option>
        </select></p>
    <p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('includes/footer.html'); ?>

