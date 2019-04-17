<?php
require_once 'connection.php';
if(isset($_POST['records']))
{
    $records=$_POST['records'];
    $sql="SELECT * FROM `user`";
    $res=mysqli_query($connect,$sql);
    $count=1;
    ?>
    <table id="tbldata" class="table table-striped">
        <tr>
            <th></th>
            <th>Sr No:</th>
            <th>First Name:</th>
            <th>Email:</th>
            <th>City:</th>
            <th>Profile:</th>
        </tr>
        <tbody class="sortable">
        <?php while ($row=mysqli_fetch_array($res)){
            ?>
            <tr>
                <td style="visibility:hidden"><?php echo $row[0];?></td>
                <td class="bg-warning"><?php echo $count++;?></td>
                <td class="bg-success" id="text-capital"><?php echo $row[1]?></td>
                <td class="bg-danger"><?php echo $row[5]?></td>
                <td class="bg-info"><?php echo $row[9]?></td>
                <td class="bg-warning"><img src="uploads/<?php echo $row[10]?>" height="30px" width="60px"></td>
                <script type="text/javascript">
                    $(function () {
                        $(".sortable").sortable();
                    });
                    var tab= document.getElementById('tbldata');
                    for(var i=0; i < tab.rows.length; i++)
                    {
                        tab.rows[i].onclick = function ()
                        {
                            var id = this.cells[0].innerHTML
                            $.ajax({
                                url:'edit.php',
                                type:'get',
                                data:{id:id},
                                success:function (result) {
                                    var user= JSON.parse(result);
                                    $("#hiddenid").val(user.id);
                                    $("#first_name").val(user.firstname);
                                    $("#last_name").val(user.lastname);
                                    $("#datepicker").val(user.dob);
                                    $("#address").val(user.address);
                                    $("#email").val(user.email);
                                    $("#password").val(user.password);
                                    $("#image_upload").show();
                                    var $radio = $('input:radio[name=gender]');
                                    if(user.gender=='Female')
                                    {
                                        $radio.filter('[value=Female]').prop('checked', true);
                                    }
                                    else
                                    {
                                        $radio.filter('[value=Male]').prop('checked', true);
                                    }
                                    $("#city").val(user.city);
                                    var $chk = $('input:checkbox[name=chk]');
                                    var arr = JSON.parse(user.hobby);
                                    $chk.prop("checked", false);
                                    $.each(arr, function (index, item) {
                                        $("#"+item).prop("checked", true);
                                    });
                                }
                            });
                        }
                    }
                </script></tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>