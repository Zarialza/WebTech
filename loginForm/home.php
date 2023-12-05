<?php

include "checkuser.php";
include "db.php";

$usernameFromForm = $_POST['uname'];
$passwordFromForm = $_POST['pwd'];

$obj = new checklogin($usernameFromForm, sha1($passwordFromForm));

$loginResult = $obj->check();

if ($loginResult) {
    $_SESSION["uname"] = $usernameFromForm;
} else {
    
    echo "Login failed. Please try again.";
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION["uname"]; ?>!</h1>
    <p>Welcome to your home page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
    }
    h1{
        margin-top: 25px;
        margin-bottom: 10px;
        text-transform: cap 
    }
    a{
        text-decoration: none;
        color: black;
        margin-top: 10px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 5px;
        transition: 0.5s;
    }
    a:hover{
        background-color: black;
        color: white;
    }
</style>
