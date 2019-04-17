<?php
require_once "connection.php";
if(isset($_FILES["file"]))
{
    $id=$_POST["dataid"];
    $filename=$_FILES['file']['name'];
    $tmp_file=$_FILES['file']['tmp_name'];
    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    if($extension=='jpg' || $extension=='jpeg' || $extension=='png') {
        move_uploaded_file($tmp_file, "uploads/" . $filename);
        $sql = "UPDATE `user` SET `profile`='$filename' WHERE id=$id";
        $res= mysqli_query($connect,$sql);
        if ($res == 1)
        {
            $res_val = 1;
        }
        else
        {
            $res_val = 0;
        }
        echo json_encode($res_val);
    }
    else
    {?>
        <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>  extension not allowed, please choose a JPEG, JPG or PNG file.</strong>
        </div>
    <?php }
}
?>