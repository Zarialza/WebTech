<?php

session_start();

class checklogin{

    public $uname;
    public $pwd;

    function __construct($uname,$pwd){

        $this->uname = $_POST['uname'];
        $this->pwd = sha1($_POST['pwd']);

    }

    function check(){

        include "db.php";

        $sql = "select * from login where uname='$this->uname' and pwd='$this->pwd'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0){
            $_SESSION["uname"]=$this->uname;
            return true;
        }
        else{
            return false;
        }

    }

}
?>

