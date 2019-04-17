<?php
require_once "connection.php";
if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    echo "record delete";
    $sql="DELETE FROM `user` WHERE id IN($id)";
    echo "$sql";
    mysqli_query($connect,$sql);
}
?>