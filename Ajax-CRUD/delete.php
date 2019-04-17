<?php
include_once "connection.php";
if(isset($_POST["id"]))
{
    $id=$_POST["id"];
    $sql="DELETE FROM `user` WHERE id=$id";
    mysqli_query($connect,$sql);
}
?>