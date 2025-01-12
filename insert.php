<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="id ">id </label>
        <input type="text" name="id ">
        <label for="name">name</label>
        <input type="text" name="name">
        <label for="address">address</label>
        <input type="text" name="address">
        <label for="age">age</label>
        <input type="text" name="age">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $age=$_POST['age'];
        $sql="INSERT INTO customer(id,name,address,age)VALUES('','$name','$address','$age')";
        $result= mysqli_query($conn,$sql);
        if ($result) {
            echo"data inserted";
        }
        else {
            echo"not inserted";
        }
    }
    
    
    ?>
</body>
</html>