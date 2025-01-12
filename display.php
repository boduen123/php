<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
    <table border="2">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>age</th>
        <th>delete</th>
        <th>update</th>
        </tr>
        <?php
    include 'connection.php';
    $sql="SELECT * FROM customer";
    $count="1";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        
    
    
    ?>
    <tr>
        <td><?php echo $count ++?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['age']?></td>
        <div class="delete">
        <td><a href="delete.php?delete=<?php echo $row['id']?>">DELETE</a></td>
        </div>
        <td><a href="update.php?update=<?php echo $row['id']?>">EDIT</a></td>
    </tr>
    <?php
    }?>
    </table>
    </div>
   <style>
.box{
    width: 100%;
    height: 50%;
}
th{
    width: 100px;
    height: 50px;
}
 .delete a{
    border: 5px;
    color: red;
}
   </style>
</body>
</html>