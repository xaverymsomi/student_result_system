<?php 
session_start();
include 'config.php';

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($dbconnect,$_POST['username']);
	$password =mysqli_real_escape_string($dbconnect,$_POST['password']);
	$role_number = mysqli_real_escape_string($dbconnect,$_POST['roles']);

	$query = "SELECT tbl_user.username, tbl_user.password, tbl_usertype.user_type FROM tbl_user, tbl_usertype WHERE tbl_user.user_type = tbl_usertype.id AND tbl_user.username = '$username' AND tbl_user.password = '$password'";

	$results = mysqli_query($dbconnect, $query);

	$fetch_user = mysqli_fetch_array($results);

	$rows = mysqli_num_rows($results);

	if($rows) {
        $_SESSION['id'] = $fetch_user['id'];//create id sessio user with user id
        $_SESSION['username'] = $fetch_user['username'];//create user username session with key username
        $_SESSION['role'] = $fetch_user['user_type'];//create user role session with key name

        if($_SESSION['role']  == "admin") {//check user role
            header("location: ../Admin-dashboard");// redirect admin to admin page
        }

        elseif ($_SESSION['role']  == "teacher") {

        	header("location: ../Teacher");
        }
        elseif($_SESSION['role']  == "student"){

            header("location: ../Student");//redirect user to user page
        }
    }   
    else {
        header("location: ../index.php?error=invalid username or passowrd");//query string
    }
}   
else {//if button login not clicked
    echo "Bad Access";
}
?>