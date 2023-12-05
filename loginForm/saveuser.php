<?php
include "db.php";
$uname = $_POST["uname"];
    $imgN = $_FILES['Photo']['name'];
    $imgType = $_FILES['Photo']['type'];
    $imgSize = $_FILES['Photo']['size'];
    $imgName = "IMG".uniqid()."CSIT".'.'.substr($imgType,6);
 
    if(file_exists($imgName)){
        die("File already exist");
    }
    else if($imgType != 'image/png' && $imgType !='image/jpeg'){
        die("Invalid Image");
    }
    else if($imgSize>50000000){
        die("Image size exceeds");
    }
    else{
        if(move_uploaded_file($_FILES['Photo']['tmp_name'],$imgName)){
    $password = $_POST["password"];
    $email = $_POST["email"];
    $DOB = $_POST["DOB"];

    $sql="insert into login(uname, password, email, DOB,photo) values ('$uname', '$password', '$email', '$DOB','$imgName')";
    // echo $sql;die;
    $res = mysqli_query($conn, $sql);
    if($res){
        
        header("location:login.php?login=true");
    }
    else{
        die("operation Failed".mysqli_error($conn));
    }
        }
        else{
            die("File cannot be uploaded");
        }
    }


   
    
?>