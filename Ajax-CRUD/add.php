<?php
require_once 'connection.php';
    if (isset($_FILES['file'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $datepicker = $_POST['datepicker'];
        $your_date = date("Y-m-d", strtotime($datepicker));
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $hobby_ary = $_POST['chk'];
        $array_hobbies = json_encode(explode(',', $hobby_ary));
        $filename=$_FILES['file']['name'];
        $tmp_file=$_FILES['file']['tmp_name'];
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        if($extension=='jpg' || $extension=='jpeg' || $extension=='png')
        {
            move_uploaded_file($tmp_file, "uploads/" . $filename);
            $sql = "INSERT INTO `user`(`firstname`, `lastname`, `dob`, `address`, `email`, `password`, `gender`, `hobby`, `city`, `profile`) VALUES ('$firstname','$lastname','$your_date','$address','$email','$password','$gender','$array_hobbies','$city','$filename')";
            $res = mysqli_query($connect, $sql);
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
                <strong> extension not allowed, please choose a JPEG, JPG or PNG file.</strong>
            </div>
        <?php
        }
    }
    ?>