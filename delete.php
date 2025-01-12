<?php
include 'connection.php';
$id=$_GET['delete'];
$sql="DELETE FROM customer WHERE id=$id";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo"<script>alert('record deleted')</script>";
}
else {
    echo"not deleted";
}

?>