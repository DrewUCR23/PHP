<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calendar</title>
</head>
<body>
    <p>Drew Gonzales</p>
    <p>3/27/2023</p>
    <p>Professor Lasky</p>
    <p>CIS-12 LAB 3</p>
    <p>Dynamic Programming[PHP]</p>
    <p>SCRIPT 2.9</p>
    <form action="calendar1.php" method="post">
        <?php
        // This is going to be the array of values for month
        $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December'];

        echo '<select name="month">';
        foreach ($months as $key => $value) {
            echo "<option value=\"$key\">$value</option>\n";
        }
        echo '</select>';

        // Make the days pull-down menu:
        echo '<select name="day">';
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>\n";
        }
        echo '</select>';

        // This will create the years pull-down menu
        echo '<select name="year">';
        for ($year = 2017; $year <= 2027; $year++) {
            echo "<option value=\"$year\">$year</option>\n";
        }
        echo '</select>';
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

