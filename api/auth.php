<?php

include_once('../resources/database/database.php');

$actualKey = "";
$securityKey = $_POST['securityKey'];

$query = db_select("SELECT * FROM TeamKeys");
if($query == true) {
    $actualKey = $query[0]['teamKey'];
}

if ($securityKey == $actualKey) {
    echo "Valid";
}

?>