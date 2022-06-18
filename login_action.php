<?php
session_start();//start sessions
$conn = mysqli_connect("127.0.0.1", "root", "", "luggiestar");// database connection

if(isset($_POST['login'])) {//check if username 
    $username = mysqli_real_escape_string($conn, $_POST['username']);//escape sql injection with and recieve username
    $password = mysqli_real_escape_string($conn, $_POST['password']);//escape sql injection with and recieve password 
    $password = sha1($password);//hash passowrd with sha1(secured more than md5)

    $prepare_query = mysqli_query($conn, "SELECT test.*, role.name FROM test, role
        WHERE username='$username', password='$password'
        AND test.role = role.id LIMIT 1");//check user if is available with the given username and password from form

    $fetct_user = mysqli_fetch_array($prepare_query);//convert returned row from array
    $count_row = mysqli_num_rows($prepare_query);//count number of return row fro a given query

    if($count_row) {
        $_SESSION['id'] = $
        ['id'];//create id sessio user with user id
        $_SESSION['username'] = $fetct_user['username'];//create user username session with key username
        $_SESSION['role'] = $fetct_user['name'];//create user role session with key name

        if($_SESSION['role']  == "admin") {//check user role
            header("location: admin.php");// redirect admin to admin page
        }

        else {
            header("location: user.php");//redirect user to user page
        }
    }   
    else {
        header("location:index.php?error=invalid username or passowrd");//query string
    }
}   
else {//if button login not clicked
    echo "Bad Access";
}


?>