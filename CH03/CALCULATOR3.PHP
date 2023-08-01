Drew Gonzales
4/6/2023
Professor Lasky
CIS 12 LAB 3
PHP (DYNAMIC WEB PROGRAMMING)
SCRIPT 3.8
CLASS CODE: 47060

 THINGS done in this modified script: The calculator.php form now uses a function to create the radio buttons. Unlike the
create_ad() user-defined function, this one takes an argument.

<?php
// Script - calculator.php

function create_gallon_radio($value) {
    echo '<input type="radio" name="gallon_price" value="' . $value . '"';
    if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == $value)) {
        echo ' checked="checked"';
    }
    echo "> " . htmlspecialchars($value) . " ";
}

$page_title = 'Trip Cost Calculator';
include('includes/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) &&
        is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) &&
        is_numeric($_POST['efficiency'])) {
        
        $gallons = $_POST['distance'] / $_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance'] / 65;

        echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
            <p>The total cost of driving ' . htmlspecialchars($_POST['distance']) . ' miles, averaging
             ' . htmlspecialchars($_POST['efficiency']) . ' miles per gallon, and paying an average of $' .
             htmlspecialchars($_POST['gallon_price']) . ' per gallon, is $' . number_format($dollars, 2) . '.
             If you drive at an average of 65 miles per hour, the trip will take approximately
             ' . number_format($hours, 2) . ' hours.</p>';

    } else {
        echo '<div class="page-header"><h1>Error!</h1></div>
            <p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }

}

?>
<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
    <p>Distance (in miles): <input type="number" name="distance" value="<?php if
    (isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']); ?>"></p>
    <p>Ave. Price Per Gallon:
        <?php
        create_gallon_radio('3.00');
        create_gallon_radio('3.50');
        create_gallon_radio('4.00');
        ?>
    </p>
    <p>Fuel Efficiency: 
        <select name="efficiency">
            <option value="10"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) echo ' selected="selected"'; ?>>Terrible</option>
            <option value="20"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) echo ' selected="selected"'; ?>>Decent</option>
            <option value="30"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) echo ' selected="selected"'; ?>>Very Good</option>
            <option value="50"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) echo ' selected="selected"'; ?>>Outstanding</option>
        </select>
    </p>
    <p><input type="submit" name="submit" value="Calculate!"></p>
</form>
<?php include('includes/footer.html'); ?>