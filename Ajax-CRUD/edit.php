<?php
require_once 'connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="SELECT * FROM `user` WHERE id=$id";
    $res=mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($res);
    echo json_encode($row);
}
?>