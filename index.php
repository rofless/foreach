<?php
include ('fukncijos.php')
?>
<?php


print_r($getflags);
?>
<br>
<?php

foreach($vacations as $vacation => $rooms)
{
    $available = $rooms - $reserved[$vacation];
    echo "Rooms " . $vacation . " available : " . $available . "all : " . $rooms . "<br>";
}


rombas( 10);

echo '<table>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['vardas'] . '</td>';
    echo '<td>' . $user['pavarde'] . '</td>';
    echo '<td>' . $user['amzius'] . '</td>';
    echo "<tr>";
    echo "<table>";
}

?>