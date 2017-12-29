<?php

include_once('database.php');

$actualKey = "";

$securityKey = $_POST["securityKey"];
$teamWinOneNumber = $_POST['teamWinOneNumber'];
$teamWinTwoNumber = $_POST['teamWinTwoNumber'];
$teamWinThreeNumber = $_POST['teamWinThreeNumber'];
$teamLoseOneNumber = $_POST['teamLoseOneNumber'];
$teamLoseTwoNumber = $_POST['teamLoseTwoNumber'];
$teamLoseThreeNumber = $_POST['teamLoseThreeNumber'];

$query = db_select("SELECT * FROM TeamKeys");
if($query == true) {
    $actualKey = $query[0]['teamKey'];
}

if ($securityKey == $actualKey) {
    $result = db_query("UPDATE Teams SET wins = wins + 1 WHERE teamNumber = \"$teamWinOneNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
    $result = db_query("UPDATE Teams SET wins = wins + 1 WHERE teamNumber = \"$teamWinTwoNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
    $result = db_query("UPDATE Teams SET wins = wins + 1 WHERE teamNumber = \"$teamWinThreeNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
    $result = db_query("UPDATE Teams SET losses = losses + 1 WHERE teamNumber = \"$teamLoseOneNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
    $result = db_query("UPDATE Teams SET losses = losses + 1 WHERE teamNumber = \"$teamLoseTwoNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
    $result = db_query("UPDATE Teams SET losses = losses + 1 WHERE teamNumber = \"$teamLoseThreeNumber\"");
    if($result === false) {
        echo "Failure";
    } else {
        echo "Success";
    }
} else {
    echo "SecurityError";
}

$query = db_select("SELECT * FROM Teams");
if($query === false) {
    echo "Failure";
} else {
    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($query));
    fclose($fp);
}

?>