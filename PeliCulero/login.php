<?php

session_start(); 

include "variables.inc";

$mysqli = new mysqli($host, $user, $pass, $base);

if (isset($_POST['uname']) && isset($_POST['psw'])) {

    function validate($data){
       /*
	   $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       */return $data;

    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['psw']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$uname' AND pass='$pass'";
		$result = $mysqli->query($sql);

        if ($result->num_rows === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['pass'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();

            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}
?>