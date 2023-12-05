<?php
include "db.php";
$name = $_POST["name"];
$roll = $_POST["roll"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "insert into login(name, roll, email, phone) values ('$name', '$roll', '$email', '$phone')";

$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:list.php?succ=true");
} else {
    die("operation Failed" . mysqli_error($conn));
}

?>