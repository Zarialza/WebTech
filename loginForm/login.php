<?php

    if(isset($_GET['login'])){
        echo "Registration Successful! Please Login";
    }
    if(isset($_GET['logout'])){
        echo "you are logged out!";
    }

?>
<div>

    <form method="post" action="home.php">
        Username<input type="text" name="uname"><br>
        Password<input type="password" name="pwd"><br>
        <input type="submit" value="submit"><br>
    </form>     
    <p>Don't have an account?<a href="register.php">Register Now</a></p>
    
</div>

<style>
    div{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>