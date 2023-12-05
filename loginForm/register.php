<?php

    if(isset($_GET['success'])){
        echo "value inserted";
    }

?>
<div>

    <form method="post" action="saveuser.php">
        username<input type="text" name="uname"><br>
        password<input type="password" name="pwd"><br>
        email<input type="text" name="email"><br>
        DOB<input type="date" name="DOB"><br>
        Photo<input type="file" name="Photo"><br>
        <input type="submit" value="Register"><br>
        
    </form>     
    <p>Already have a account? <a href="login.php">Log In</a></p>
    
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

