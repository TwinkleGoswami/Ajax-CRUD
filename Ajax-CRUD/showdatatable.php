<?php
require_once "connection.php";
$sql="SELECT * FROM `user`";
$res=mysqli_query($connect,$sql);
$row = array();
while ($result=mysqli_fetch_array($res)){
    $row[] = $result;
}
echo json_encode($row);
?>