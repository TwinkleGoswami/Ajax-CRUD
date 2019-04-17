$(document).ready(function () {
    $('#first_name_error').hide();
    $('#last_name_error').hide();
    $('#datepicker_error').hide();
    $('#email_error').hide();
    $('#address_error').hide();
    $('#password_error').hide();
    $('#cpassword_error').hide();
    $('#profile_error').hide();
    var fname_error = true;
    var lname_error = true;
    var date_error = true;
    var mail_error = true;
    var pass_error = true;
    var cpass_error = true;
    var upload_error = true;
    var add_error = true;
    $('#first_name').blur(function () {
        firstname_check();


    });
    $('#first_name').keydown(function (e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });

    function firstname_check() {
        var fname_val = $('#first_name').val();
        if (fname_val.length == '') {
            $('#first_name_error').show();
            $('#first_name_error').html("**Please fill first name");
            $('#first_name_error').focus();
            $('#first_name_error').css("color", "red");
            fname_error = false;
            return false;
        } else {
            $('#first_name_error').hide();
        }
        if ((fname_val.length < 3) || (fname_val.length > 20)) {
            $('#first_name_error').show();
            $('#first_name_error').html("**First name length must be between 3 and 20");
            $('#first_name_error').focus();
            $('#first_name_error').css("color", "red");
            fname_error = false;
            return false;
        } else {
            $('#first_name_error').hide();
        }
    }

    $('#last_name').blur(function () {
        lastname_check();
    });
    $(function () {
        $('#last_name').keydown(function (e) {
            if (e.shiftKey || e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                    e.preventDefault();
                }
            }
        });
    });

    function lastname_check() {
        var lname_val = $('#last_name').val();
        if (lname_val.length == '') {
            $('#last_name_error').show();
            $('#last_name_error').html("**Please fill last name");
            $('#last_name_error').focus();
            $('#last_name_error').css("color", "red");
            lname_error = false;
            return false;
        } else {
            $('#last_name_error').hide();
        }
        if ((lname_val.length < 3) || (lname_val.length > 20)) {
            $('#last_name_error').show();
            $('#last_name_error').html("**Last name length must be between 3 and 20");
            $('#last_name_error').focus();
            $('#last_name_error').css("color", "red");
            lname_error = false;
            return false;
        } else {
            $('#last_name_error').hide();
        }
    }

    $('#datepicker').keyup(function () {
        datepicker_check();
    });

    function datepicker_check() {
        var datepicker_val = $('#datepicker').val();
        if (datepicker_val.length == '') {
            $('#datepicker_error').show();
            $('#datepicker_error').html("**Please fill date of birth");
            $('#datepicker_error').focus();
            $('#datepicker_error').css("color", "red");
            date_error = false;
            return false;
        } else {
            $('#datepicker_error').hide();
        }
        var fromDate = new Date($("#datepicker").val());
        var date = new Date(fromDate).toDateString("yyyy-MM-dd");
    }

    $('#email').keyup(function () {
        email_check();
    });

    function email_check() {
        var email_val = $('#email').val();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!(mailformat.test(email_val))) {
            $('#email_error').show();
            $('#email_error').html("**Please Enter valid Email Id.");
            $('#email_error').focus();
            $('#email_error').css("color", "red");
            mail_error = false;
            return false;
        } else {
            $('#email_error').hide();
        }
    }

    $('#address').blur(function () {
        address_check();
    });

    function address_check() {
        var address = $('#address').val();
        if (address.length == '') {
            $('#address_error').show();
            $('#address_error').html("**Please enter address");
            $('#address_error').focus();
            $('#address_error').css("color", "red");
            add_error = false;
            return false;
        } else {
            $('#address_error').hide();
        }
    }

    $('#password').blur(function () {
        password_check();
    });

    function password_check() {
        var password_val = $('#password').val();
        var pattern = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;
        if (password_val.length == '') {
            $('#password_error').show();
            $('#password_error').html("**Please Enter Password");
            $('#password_error').focus();
            $('#password_error').css("color", "red");
            pass_error = false;
            return false;
        } else {
            $('#password_error').hide();
        }
        if (pattern.test(password_val)) {
            $('#password_error').hide();

        } else {
            $('#password_error').show();
            $('#password_error').html("**Minimum eight characters, at least one letter, one number and one special character");
            $('#password_error').focus();
            $('#password_error').css("color", "red");
            pass_error = false;
            return false;
        }
    }

    $('#password_confirmation').blur(function () {
        confirm_password_check();
    });

    function confirm_password_check() {
        var cpassword_val = $('#password_confirmation').val();
        var password_val = $('#password').val();
        if (password_val != cpassword_val) {
            $('#cpassword_error').show();
            $('#cpassword_error').html("**Password are not matching");
            $('#cpassword_error').focus();
            $('#cpassword_error').css("color", "red");
            cpass_error = false;
            return false;
        } else {
            $('#cpassword_error').hide();
        }
    }

    $('#profile').change(function () {
        profile_check();
    });

    function profile_check() {
        var profile_val = $('#profile').val();
        if (profile_val.length == '') {
            $('#profile_error').show();
            $('#profile_error').html("**Select your profile");
            $('#profile_error').focus();
            $('#profile_error').css("color", "red");
            upload_error = false;
            return false;
        } else {
            $('#profile_error').hide();
        }
    }
    $("#image_upload").click(function () {
        upload_error = true;
        profile_check();
        if(upload_error == true )
        {
            var id="";
            id=$("#hiddenid").val();
            var file_data = $("#profile").prop("files")[0];
            var form_data = new FormData();
            form_data.append('dataid',id);
            form_data.append("file", file_data);
            $.ajax({
                url:"image_upload.php",
                type:"post",
                data:form_data,
                contentType: false,
                processData: false,
                success:function (result) {
                    if (result == 1){
                        $("form").trigger("reset");
                        $('#update-msg').show();
                        read_records();
                    } else{
                        $("form").trigger("reset");
                        $('#notupdate-msg').show();
                        read_records();
                    }
                }
            });

        }

    });

    $('#register').click(function () {
                fname_error = true;
                lname_error = true;
                date_error = true;
                mail_error = true;
                pass_error = true;
                add_error = true;
                upload_error = true;
                firstname_check();
                lastname_check();
                datepicker_check();
                email_check();
                password_check();
                address_check();
                var id = $("#hiddenid").val();
                if (id == "") {
                profile_check();
                }
                if ((fname_error == true) && (lname_error == true) && (date_error == true) && (mail_error == true) && (pass_error == true) && (add_error == true) &&(upload_error == true)) {
                    debugger;
                    var firstname = $('#first_name').val();
                    var lastname = $('#last_name').val();
                    var datepicker = $('#datepicker').val();
                    var address = $('#address').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var gender = $("input[name='gender']:checked").val();
                    var hobby = '';
                    $('input[name="chk"]:checked').each(function () {
                        hobby += this.value + ',';
                    });
                    hobby = hobby.slice(0, -1);
                    var city = $('#city').val();
                    var file_data = $("#profile").prop("files")[0];
                    var form_data = new FormData();

                    form_data.append('dataid',1);
                    form_data.append('firstname',firstname);
                    form_data.append('lastname',lastname);
                    form_data.append('datepicker',datepicker);
                    form_data.append('address',address);
                    form_data.append('email',email);
                    form_data.append('password',password);
                    form_data.append('gender',gender);
                    form_data.append('chk',hobby);
                    form_data.append('city',city);
                    form_data.append("file", file_data);
                        var id = "";
                        id = $("#hiddenid").val();
                        if (id == "") {
                            $.ajax({
                                url: 'add.php',
                                type: 'post',
                                data: form_data,
                                contentType: false,
                                processData: false,
                                success: function (response) {
                                    if (response == 1){
                                        $("form").trigger("reset");
                                        $('#success-msg').show();
                                        read_records();
                                    } else{
                                        $("form").trigger("reset");
                                        $('#unsuccess-msg').show();
                                        read_records();
                                    }
                                }
                            });
                        } else {
                            var file_data = $("#profile").prop("files")[0];
                            var form_data = new FormData();
                            form_data.append('dataid',id);
                            form_data.append('firstname',firstname);
                            form_data.append('lastname',lastname);
                            form_data.append('datepicker',datepicker);
                            form_data.append('address',address);
                            form_data.append('email',email);
                            form_data.append('password',password);
                            form_data.append('gender',gender);
                            form_data.append('chk',hobby);
                            form_data.append('city',city);
                            form_data.append('file',file_data);

                            $.ajax({
                                url: "update.php",
                                type: "post",
                                data:form_data,
                                contentType: false,
                                processData: false,
                                success: function (result) {
                                    if (result == 1){
                                        $("form").trigger("reset");
                                        $('#update-msg').show();
                                        read_records();
                                    } else{
                                        $("form").trigger("reset");
                                        $('#notupdate-msg').show();
                                        read_records();
                                    }
                                }
                            });
                        }
                    }
                 else {
                    return false;
                }
            });
    $('#Delete').click(function () {
        var id="";
        id=$("#hiddenid").val();
        if(id == "") {
            alert("please select Row of table you want to delete")
        }
        else
        {
            var result=confirm("Are you sure want to delete?");
            {
                if(result)
                {
                    $.ajax({
                        url:"delete.php",
                        type:"post",
                        data:{id:id},
                        success:function (result) {
                            $("form").trigger("reset");
                            read_records();
                        }
                    });
                }
                else
                {
                    $("form").trigger("reset");
                }
            }
        }
    });
});
$(document).ready(function () {
    var today = new Date();
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        endDate: "today",
        maxDate: today,
        changeMonth: true,
        changeYear: true,
    }).on('changeDate', function () {
            $(this).datepicker('hide');
        });
});
$(document).ready(function () {
    read_records();

});
function read_records()
{
    var records="records";
    $.ajax({
        url: 'display.php',
        type: 'post',
        data: {records:records},
        success:function (response) {
            $('#span-table').html(response);
        }
    });
}