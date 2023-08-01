<html lang="en">
<head>
<meta charset="utf-8">
<title>Multidimensional Arrays</title>
</head>
<body>
<p>Drew Gonzales</p>
<p>3/27/2023</p>
<p>Professor Lasky</p>
<p>CIS-12 LAB 3</p>
<p>Dynamic Programming[PHP]</p>
<p>SCRIPT 2.7</p>
<p>Some North American States, provinces and Territories:</p>
<?php

// Create one array:
$mexico = [
    'YU' => 'Yucatan',
    'BC' => 'Baja California',
    'OA' => 'Oaxaca'
];

// Create another array:
$us = [
    'MD' => 'Maryland',
    'IL' => 'Illinois',
    'PA' => 'Pennsylvania',
    'IA' => 'Iowa'
];

// Create a third array:
$canada = [
    'QC' => 'Quebec',
    'AB' => 'Alberta',
    'NT' => 'Northwest Territories',
    'YT' => 'Yukon',
    'PE' => 'Prince Edward Island'
];

// Combine the arrays:
$n_america = [
    'Mexico' => $mexico,
    'United States' => $us,
    'Canada' => $canada
];

foreach ($n_america as $country => $list) {
    echo "<h2>$country</h2><ul>";
    foreach($list as $k => $v) {
        echo "<li>$k - $v</li>\n";
    }
    echo '</ul>';
}

?>

</body>
</html>
