<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Form Feedback</title>
</head>
<body>
<form action="calendar.php" method="post">
<p>Drew Gonzales</p>
<p>3/27/2023</p>
<p>Professor Lasky</p>
<p>CIS-12 LAB 3</p>
<p>Dynamic Programming[PHP]</p>
<p>SCRIPT 2.6</p>

<?php
//this is going to make the set of array values 
$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
'September', 'October', 'November', 'December'];

$days= range(1,31);
$years= range(2017,2027);

//make the months pull down menu
echo '<select name="month">';
foreach($months as $key => $value) { 
    echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

//the next for each statement is going to make the drop down elements for the pull down menu 
echo '<select name="day">';
foreach ($days as $value) {
    echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>'; 

// Add the years pull down menu
echo '<select name="year">';
foreach ($years as $value) {
    echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';
?>

<!-- Add submit button -->
<input type="submit" value="Submit">
</form>
</body>
</html>
