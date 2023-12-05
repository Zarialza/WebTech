<?php

if (isset($_GET['success'])) {
    echo "value inserted";
}

?>

<div>

    <form method="post" action="save.php">
        name<input type="text" name="name"><br>
        roll<input type="text" name="roll"><br>
        email<input type="text" name="email"><br>
        phone<input type="text" name="phone"><br>
        <input type="submit" value="submit"><br>
    </form>

</div>

<style>
    div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>