<style>
    .half-box {
        float: left; width: 50%; padding: 15px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid black;
    }
</style>

<?php
require_once "connection.php";
if (isset($_POST["id"]))
{
    $id=$_POST["id"];
    $sql="SELECT *,concat(firstName,' ',lastName) Fullname FROM `user` where id IN($id)";
    $res=mysqli_query($connect,$sql);
    ?>

    <div class="container"style="margin-top:30px">
        <div class="row">
    <?php while ($row=mysqli_fetch_array($res)){
    ?>
          <div class="half-box">
            <div class="form-group">
                <span style="text-transform: capitalize;"><?php echo $row["Fullname"];?></span>
                <span style="float: right"><?php echo $row[9];?></span>
            </div>
            <div class="form-group">
                <span><?php $date = $row[3];
                    $timestamp = strtotime($date);
                    echo date('d/m/Y', $timestamp);
                    ?></span>
            </div>
            <div class="form-group">
                <span><?php echo $row[5];?></span>
            </div>
<!--            <div class="form-group">-->
<!---->
<!--                <span>--><?php //$hobby = $row[8];
//                            $value=json_decode($hobby,true);
//                            $cur_val = implode(',', $value);
//                            echo $cur_val;
//                ?><!--</span>-->
<!--            </div>-->
          </div>
    <?php } ?>
        </div>
    </div>

<?php }
?>