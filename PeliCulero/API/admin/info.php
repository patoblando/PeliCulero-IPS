<?php
session_start();

if($_SESSION['username'] != 'admin'){
    die("504");
}

include "../../API/variables.inc";

$mysqli = new mysqli($host, $user, $pass, $base);

$info = $mysqli->query("SELECT id, username, active, ban from users");
// $info1 = $info->fetch_array(MYSQLI_ASSOC);
// print_r($info1);
// $info2 = $info->fetch_array(MYSQLI_ASSOC);
// print_r($info2);


$response = [];
while($row = $info->fetch_array(MYSQLI_ASSOC)){
    if($row['username'] != 'admin'){
        $response[] = $row;
    }
}

echo json_encode($response);

?>