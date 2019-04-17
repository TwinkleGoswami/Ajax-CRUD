
<?php
require_once "connection.php";
if (isset($_POST["id"]))
{
    $count=0;
    $id=$_POST["id"];
    $sql="SELECT *,concat(firstName,' ',lastName) Fullname FROM `user` where id IN($id)";
    $res=mysqli_query($connect,$sql);
    ?>

    <div class="container"style="margin-top:30px">
    <?php while ($row=mysqli_fetch_array($res)){

    ?>
    <?php  if ($count == 0)
        echo '<div class ="row">';
    ?>

    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            Name:
            <span><?php echo $row["Fullname"];?></span>
        </div>
        <div class="form-group">
            DOB:
            <span><?php echo $row[3];?></span>
        </div>
        <div class="form-group">
            Email:
            <span><?php echo $row[5];?></span>
        </div>
        <div class="form-group">
            Hobby:
            <span><?php echo $row[8];?></span>
        </div>
        <div class="form-group">
            City:
            <span><?php echo $row[9];?></span>
        </div>

    </div>
    <?php
    if($count == 1)
        echo '</div>';
    $count = ($count == 0 ? 1 : 0);
    ?>
    </div>
<?php } ?>
<?php }
?>