<?php

include_once('../resources/database/database.php');

$actualKey = "";

$securityKey = $_POST["securityKey"];
$name = $_POST["name"];
$number = $_POST["number"];
$comments = $_POST["comments"];
$groundCubes = $_POST["groundCubes"];
$returnCubes = $_POST["returnCubes"];
$stackCubes = $_POST["stackCubes"];
$switch = $_POST["switch"];
$scale = $_POST["scale"];
$climb = $_POST["climb"];
$wins = $_POST["wins"];
$losses = $_POST["losses"];
$boosts = $_POST["boosts"];
$forces = $_POST["forces"];
$levitates = $_POST["levitates"];
$timeScale = $_POST["timeScale"];
$timeSwitch = $_POST["timeSwitch"];

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
            $result = db_query("UPDATE Teams SET teamName=\"$name\", teamNumber=\"$number\", comments=\"$comments\" groundCubes=\"$groundCubes\", returnCubes=\"$returnCubes\", stackCubes=\"$stackCubes\", switch=\"$switch\", scale=\"$scale\", climb=\"$climb\", wins=\"$wins\", losses=\"$losses\", boosts=\"$boosts\", forces=\"$forces\", levitates=\"$levitates\", timeScale=\"$timeScale\", timeSwitch=\"$timeSwitch\" WHERE teamName=\"$name\"");
            if($result === false) {
                echo "Failure";
            } else {
                echo "Success";
                $query = db_select("SELECT * FROM Teams");
                if($query === false) {
                    echo "Failure";
                } else {
                    $fp = fopen('teams.json', 'w');
                    fwrite($fp, json_encode($query));
                    fclose($fp);
                }
            }
        } else {
            $result = db_query("INSERT INTO Teams (teamName, teamNumber, comments, groundCubes, returnCubes, stackCubes, switch, scale, climb, wins, losses, boosts, forces, levitates, timeScale, timeSwitch) VALUES (\"$name\",\"$number\",\"$comments\",\"$groundCubes\",\"$returnCubes\",\"$stackCubes\",\"$switch\",\"$scale\",\"$climb\", \"$wins\", \"$losses\", \"$boosts\", \"$forces\", \"$levitates\", \"$timeScale\", \"$timeSwitch\")");
            if($result === false) {
                echo "Failure";
            } else {
                echo "Success";
                $query = db_select("SELECT * FROM Teams");
                if($query === false) {
                    echo "Failure";
                } else {
                    $fp = fopen('teams.json', 'w');
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