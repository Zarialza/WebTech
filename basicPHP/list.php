<?php 

if(isset($_GET['del'])){
    echo "values deleted";
}
if(isset($_GET['update'])){
    echo "values updated";
}
?>
<table border="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>sn</th>
            <th>name</th>
            <th>roll</th>
            <th>email</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
    
    include "db.php";
    $sql = 'select * from web';
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0){
        $sn=1;
        while($row=mysqli_fetch_assoc($res)){
            ?>
        <tr>
            <td><?php echo $sn; ?> </td>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['roll']?> </td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['phone']; ?> </td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>||
            <a href="delete.php?id=<?php echo $row['id'];?>"> Delete </a></td>
        </tr>
        <?php $sn++; }}
        ?>
