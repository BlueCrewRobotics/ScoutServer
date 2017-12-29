<?php

include_once('database.php');

$actualKey = "";

$securityKey = $_POST["securityKey"];
$name = $_POST["name"];
$number = $_POST["number"];
$dropGears = $_POST["dropGears"];
$collectGears = $_POST["collectGears"];
$climbRope = $_POST["climbRope"];
$highBoiler = $_POST["highBoiler"];
$lowBoiler = $_POST["lowBoiler"];
$collectFuel = $_POST["collectFuel"];

$verArr = [];

$query = db_select("SELECT * FROM TeamKeys");
if($query == true) {
    $actualKey = $query[0]['teamKey'];
}

if ($securityKey == $actualKey) {
    $findTeam = db_select("SELECT teamName FROM Teams");
    if($findTeam === false) {
        echo "Failure";
    } else {
        foreach ($findTeam as $item) {
            array_push($verArr, $item['teamName']);
        }
        if (in_array($name, $verArr)) {
            echo "Got Item";
            $result = db_query("UPDATE Teams SET teamName=\"$name\", teamNumber=\"$number\", dropGears=\"$dropGears\", collectGears=\"$collectGears\", climbRope=\"$climbRope\", highBoiler=\"$highBoiler\", lowBoiler=\"$lowBoiler\", collectFuel=\"$collectFuel\" WHERE teamName=\"$name\"");
            if($result === false) {
                echo "Failure";
            } else {
                echo "Success";
                $query = db_select("SELECT * FROM Teams");
                if($query === false) {
                    echo "Failure";
                } else {
                    $fp = fopen('results.json', 'w');
                    fwrite($fp, json_encode($query));
                    fclose($fp);
                }
            }
        } else {
            $result = db_query("INSERT INTO Teams (teamName, teamNumber, dropGears, collectGears, climbRope, highBoiler, lowBoiler, collectFuel, wins, losses) VALUES (\"$name\",\"$number\",\"$dropGears\",\"$collectGears\",\"$climbRope\",\"$highBoiler\",\"$lowBoiler\",\"$collectFuel\", 0, 0)");
            if($result === false) {
                echo "Failure";
            } else {
                echo "Success";
                $query = db_select("SELECT * FROM Teams");
                if($query === false) {
                    echo "Failure";
                } else {
                    $fp = fopen('results.json', 'w');
                    fwrite($fp, json_encode($query));
                    fclose($fp);
                }
            }
        }
    }
} else {
    echo "SecurityError";
}
?>