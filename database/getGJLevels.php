<?php
header("Content-Type: text/plain");

/*
-1 = Failed
1 = Success
*/

$levelID      = 94;
$levelName    = "Jumper";
$description  = "This is a sample level on ZenithGDPS Core!";
$version      = 4;
$playerID     = 4;
$rated        = 0;
$difficulty   = 1;
$downloads    = 42;
$songID       = 6;
$gameVersion  = 1;
$likes        = 1;
$length       = 3;
$username     = "Astral";
$totalResults = 1;
$page         = 1;
$perPage      = 10;

$levelData = implode(":", [
    1, $levelID,
    2, $levelName,
    3, $description,
    5, $version,
    6, $playerID,
    8, $rated,
    9, $difficulty,
    10, $downloads,
    12, $songID,
    13, $gameVersion,
    14, $likes,
    15, $length
]) . "|";

$userData = implode(":", [
    $playerID,
    $username,
    0
]) . "|";

echo $levelData . "#" . $userData . "#" . $totalResults . ":" . $page . ":" . $perPage;
?>