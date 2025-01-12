<?php
$conn= new mysqli('localhost','root','','onlineshop');
if ($conn) {
    echo"connected succefully";
}
else {
    echo"not connected";
}

?>