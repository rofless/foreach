<?php

$flags = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
"Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
"Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
"Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
"Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
"Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg",
];

echo "<br>";
function getflag($flags) {
foreach ($flags as $country => $flag) {
$flags[$country] = sprintf('<img src="%s" height="100px">', $flag);
}
return $flags;
}
$getflags = getflag($flags);

function rombas($number)
{
    for ($break = 1; $break <= $number; $break++) {
        for ($dot = $break; $dot <= $number; $dot++)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    };
    for ($break = $number; $break >= 0; $break--) {
        for ($dot = $number - $break; $dot >= 0; $dot--)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    }
}

$vacations = ["101"=> 4,"102" => 5,"103" => 2];
$reserved = ["101"=> 2,"102" => 3, "103" => 0];

$user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19];
$user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21];
$user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];
$users=[$user1, $user2, $user3];
?>