<html>
<head>
    <title></title>
<!--    bootstrap library-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--    datatable library-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="container" style="margin-top: 30px ">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select id="select-query">
                <option>Select here</option>
                <option value="delete">Delete</option>
                <option value="sticker">Sticker</option>
            </select>
            <button name="deletebtn" id="deletebtn"><i class="glyphicon glyphicon-trash"></i></button>
        </div>
    </div>
    <br/>
    <table id="example" class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th><input name="select_all" value="1" type="checkbox"></th>
            <th>Firstname</th>
            <th>Last name</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        </thead>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var table=$('#example').DataTable({
            "ajax":
                {
                    "url"   :"showdatatable.php",
                    "dataSrc"  : ""
                },
            "columns"   : [
                {"data" : "id"},
                {"data" : "firstname"},
                {"data" : "lastname"},
                {"data" : "dob"},
                {"data" : "email"},
                {"data" : "gender"},
                {"data" : "city"},
            ],
            'columnDefs': [
                {
                    'targets': 0,
                    'searchable': false,
                    'orderable': false,
                    "render": function (data, type, row)
                    {
                        return "<input type='checkbox'  class='get-content' style='margin-left:10px;margin-right:10px;'/>";
                    }

                }
                ]
        });
        $('#example').on('click', 'input[type="checkbox"]', function(e) {
            var $row = $(this).closest('tr');
            if(this.checked){
                $row.addClass('selected');
            } else {
                $row.removeClass('selected');
            }
            e.stopPropagation();
        });
        $('thead input[name="select_all"]', table.table().container()).on('click', function(e){
            if(this.checked){
                $('#example tbody input[type="checkbox"]:not(:checked)').trigger('click');
            } else {
                $('#example tbody input[type="checkbox"]:checked').trigger('click');
            }
            e.stopPropagation();
        });
        $("select#select-query").change(function(){
            var data = $.map(table.rows('.selected').data(), function (item) {
                console.log(data);
                return item[0];
            });
            var id = data.toString();
            console.log(id);
            if($("#select-query option:selected").text() === "Sticker") {
                if(id == "")
                {
                    alert("please select record");
                }
                else {
                    $.ajax({
                        url: "selectrecord.php",
                        type: "post",
                        data: {id: id},
                        success: function (response) {
                            var dailog = window.open();
                            dailog.document.write(response);
                            dailog.print();
                        }
                    });
                }
            }
            else if($("#select-query option:selected").text() === "Delete")
            {
                if(id == "")
                {
                    alert("please select record you want to delete");
                }
                else {
                $("#deletebtn").click(function ()
                {
                    var result=confirm("Are you sure want to delete?");
                    if (result)
                    {
                        $.ajax({
                            url: "deletedatatable.php",
                            type: "post",
                            data: {id: id},
                            success: function (response) {
                                table.ajax.reload();
                            }
                        });
                    }
                });
                }
            }
        });
    })
</script>
</body>
</html>