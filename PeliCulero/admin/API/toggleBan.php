<?php
include "../../API/variables.inc";

$mysqli = new mysqli($host, $user, $pass, $base);

$id = $_POST['id'];

$ban_status = $mysqli->query('SELECT ban FROM users WHERE id = "'.$id.'";');
$ban_status = $ban_status->fetch_array(MYSQLI_ASSOC)['ban'];

$new_bs;
if($ban_status == 1){
    $new_bs = 0;
} else {
    $new_bs = 1;
}

$mysqli->query('UPDATE users SET ban='.$new_bs.' WHERE id = '.$id);

$res['res'] = 1;
$res['id'] = $id;
echo json_encode($res);
?>