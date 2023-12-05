<?php 

if(isset($_GET['del'])){
    echo "values deleted";
}
?>
<table border="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>sn</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>DOB</th>
            <th>photo</th>
        </tr>
    </thead>
    <tbody>
<?php
    
    include "db.php";
    $sql = 'select * from login';
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0){
        $sn=1;
        while($row=mysqli_fetch_assoc($res)){
            ?>
        <tr>
            <td><?php echo $sn; ?> </td>
            <td><?php echo $row['uname']; ?> </td>
            <td><?php echo $row['password']?> </td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['DOB']; ?> </td>
            <td><img height="100" width="100" src="<?php echo $row['photo'];?>"> </td>
            </tr>
        <?php $sn++; }}
        ?>