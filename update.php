
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

<?php
include 'connection.php';

$id=$_GET['update'];
  $sql= "SELECT * FROM customer WHERE id='$id'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  if (isset($_POST['update'])) {
    $id=$_GET['update'];
  
  }
?>







        <label for="id ">id </label>
        <input type="text" name="id" value="<?php echo $row['id']?>">
        <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $row['name']?>">
        <label for="address">address</label>
        <input type="text" name="address" value="<?php echo $row['address']?>">
        <label for="age">age</label>
        <input type="text" name="age" value="<?php echo $row['age']?>">
        <button type="submit" name="update"value="update">update</button>
    </form>

</body>
</html>