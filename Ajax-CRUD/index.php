<?php
include_once 'link.php';
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
</head>
<body>

<form method="post" action="">
        <div class="container" style="margin-top:30px">
            <div class="form-group">
                <span style="display: none" id="success-msg">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Successfully Registration!</strong>
                    </div>
                </span>
                <span style="display: none"id="unsuccess-msg">
                         <div class="alert alert-danger alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong> Unsuccessfull Registration!</strong>
                         </div>
                </span>
                <span style="display: none" id="update-msg">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Update Successfully!</strong>
                    </div>
                </span>
                <span style="display: none"id="notupdate-msg">
                         <div class="alert alert-danger alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong> Update not Successfully!</strong>
                         </div>
                </span>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Add User </strong></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" id="hiddenid"/>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
                                        <span id="first_name_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" tabindex="2">
                                        <span id="last_name_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="datepicker" name="datepicker" style="font-size: 14px;padding: 10px" readonly placeholder="Enter DOB" class="form-control " tabindex="3" />
                                        <span id="datepicker_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="address" name="address" placeholder="Enter address" class="form-control" tabindex="4"></textarea>
                                        <span id="address_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
                                        <span id="email_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
                                        <span id="password_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="gender" id="gender1" value="Male"  tabindex="6" checked>Male
                                        <input type="radio" name="gender" id="gender2" value="Female"  tabindex="6">Female
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="chk" id="Developing"  value="Developing" >Developer
                                        <input type="checkbox" name="chk" id="Designing"  value="Designing" >Designer
                                        <input type="checkbox" name="chk" id="Manager"  value="Manager" >Manager
                                    </div>
                                    <div class="form-group">
                                        <select name="city" id="city" class="form-control" tabindex="10">
                                            <option value="Surat">Surat</option>
                                            <option value="Ahemedabad">Ahemedabad</option>
                                            <option value="Vadodra">Vadodra</option>
                                            <option value="Navsari">Navsari</option>
                                            <option value="Bharuch">Bharuch</option>
                                            <option value="Vapi">Vapi</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-lm-3 col-ld-3">
                                        <div class="custom-file">
                                        <input type="file" name="profile" id="profile" tabindex="8">
                                        <span id="profile_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lm-3 col-ld-3">
                                        <input type="button" style="display: none" id="image_upload" name="image_upload" class="btn btn-info" value="Image Upload"/>
                                    </div>

                                        <div class="form-group">
                                            <input type="button" id="register" name="register" class="btn btn-primary" value="+"/>
                                            <button type="button" id="Delete" name="delete" class="btn btn-danger">-</button>
                                        </div>

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <span id="span-table"></span>
                                    </div>
                                </div>
                            </div>
<!--                            <input type="button" id="register" name="register" class="btn btn-primary" value="+"/>-->
<!--                            <button type="button" id="Delete" name="delete" class="btn btn-danger">-</button>-->
                            <hr style="margin-top:10px;margin-bottom:10px;">
                        </form>
                    </div>
                </div>
        </div>
    </form>

</body>
</html>
