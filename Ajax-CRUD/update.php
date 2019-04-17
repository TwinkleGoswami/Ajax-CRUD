<?php
include_once 'connection.php';
if(isset($_POST["dataid"]))
{
    $id=$_POST["dataid"];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $dob=$_POST["datepicker"];
    $your_date = date("Y-m-d", strtotime($dob));
    $address=$_POST["address"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];
    $hobby_ary = $_POST['chk'];
    $array_hobbies = json_encode(explode(',', $hobby_ary));
    $city=$_POST["city"];
    $sql="UPDATE `user` SET `firstname`='$firstname',`lastname`='$lastname',`dob`= '$your_date',`address`='$address',`email`='$email',`password`='$password',`gender`='$gender',`hobby`='$array_hobbies',`city`='$city' WHERE id=$id";
    $res=mysqli_query($connect,$sql);
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
?>