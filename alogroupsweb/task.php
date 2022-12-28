<?php
session_start();
$session_value = '';
if (isset($_SESSION['id'])) {
    $session_value .= $_SESSION['id'];
}
$session_value;
?>
<!-- // if (!isset($_SESSION)) {
//   session_start();
// } -->
<link rel="stylesheet" href="assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="assets/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<!-- Syncfusion Essential JS 2 Styles -->
<link rel="stylesheet" href="https://cdn.syncfusion.com/ej2/material.css" />
<!-- Syncfusion Essential JS 2 Scripts -->
<script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js"></script>

<style>
    #dashboard {
        display: none;
    }

    table {

        /* display: block; */
        width: 100%;
        overflow-x: scroll;
        white-space: nowrap;

    }
</style>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
                <div class="card-footer clearfix" style="background-color:rgb(244 246 249) !important">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Task </button>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Task </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="loginid" name="loginid" value=<?php echo  $session_value; ?>>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInput">StartDate</label>
                                    <input id="startdate" />

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInput">StartTime</label>
                                        <input type="time" name="myTime" id="starttime" class="hh:mm A" min="9:00" max="18:00" step="1800" />
                                        <!-- <input type="time" name="myTime2" class="time-mm-hh" /> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="exampleInput">EndTime</label>
                                        <input type="time" name="endtime" class="hh:mm A" id="endtime" min="9:00" max="18:00" step="1800">
                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInput">Task Description:</label><br>
                                        <input type="text" id="taskdetails" name="taskdetails"><br>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Status</label>
                                        <select class="custom-select" id="status" name="status">
                                            <option>Status</option>
                                            <option value="1">Started</option>
                                            <option value="2">Pending</option>
                                            <option value="3">On-Progress</option>
                                            <option value="4">Done</option>

                                        </select>
                                    </div>
                                </div>
                            </div>



                            </form>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" name="submit" onclick="save()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
<br>
<br>
<section class="content" id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee Details </h3>
                    </div>

                    <div class="card-body ">
                        <section>
                            <div style="margin-left:auto;">
                                <label style="color: #0054A8;" for="">SEARCH :</label>
                                <input id="myInput" type="text" placeholder="Search..">
                            </div>
                        </section>
                        <div class="container-fluid">
                            <table id="example2" class="table table-bordered ">
                                <thead>
                                    <tr>

                                        <th>SI.No</th>
                                        <th>Start Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Task Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $vendor = mysqli_query($conn, "SELECT id,loginid,startdate,starttime,endtime,taskdetails,status from task WHERE deletestatus='1' AND loginid='$session_value'");
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($vendor)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row['startdate'] ?></td>
                                            <td><?php echo $row['starttime'] ?></td>
                                            <td><?php echo $row['endtime'] ?></td>
                                            <td><?php echo $row['taskdetails'] ?></td>

                                            <td>
                                                <?php
                                                if ($row['status'] == 1) {
                                                    echo "<span class='badge badge-warning'>Started</span>";
                                                } elseif ($row['status'] == 2) {
                                                    echo "<span class='badge badge-secondary'>Pending</span>";
                                                } elseif ($row['status'] == 3) {
                                                    echo "<span class='badge badge-primary'>On-Progress</span>";
                                                } elseif ($row['status'] == 4) {
                                                    echo "<span class='badge badge-success'>Done</span>";
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <!-- <a style="margin-right: 10px;cursor:pointer" data-toggle="modal" data-target="#viewmodal-default<?php echo $row['id']; ?>"><i class="nav-icon fas fa-eye"></i></a> -->
                                                <a style="margin-right: 10px;cursor:pointer" data-toggle="modal" data-target="#editmodal-default<?php echo $row['id']; ?>"><i class="nav-icon fas fa-edit"></i></a>
                                                <a style="cursor:pointer" data-toggle="modal" data-target="#deletemodal-sm<?php echo $row['id']; ?>"><i class="nav-icon fas fa-trash"></i></a>
                                            </td>
                                            <!-- Delete Start -->
                                            <div class="modal fade" id="deletemodal-sm<?php echo $row['id']; ?>">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Employee Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                            <button type="button" class="btn btn-primary" onclick="deleterecord(<?php echo $row['id']; ?>)">Yes</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- edit start -->
                                            <div class="modal fade" id="editmodal-default<?php echo $row['id']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">StartDate</label>
                                                                        <input id="startdate<?php echo $row['id']; ?>" value="<?php echo $row['startdate']; ?>" />

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">StartTime</label>
                                                                            <input type="time" name="myTime" id="starttime<?php echo $row['id']; ?>" value="<?php echo $row['starttime']; ?>" class="time-mm-hh" min="9:00" max="18:00" step="1800" />
                                                                            <!-- <input type="time" name="myTime2" class="time-mm-hh" /> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">EndTime</label>
                                                                        <input type="time" id="endtime<?php echo $row['id']; ?>" value="<?php echo $row['endtime']; ?>" class="hh:mm A" min="9:00" max="18:00" step="1800">
                                                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Task Description:</label><br>
                                                                            <input type="text" id="taskdetails<?php echo $row['id']; ?>" value="<?php echo $row['taskdetails']; ?>" name="taskdetails"><br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleSelectBorder">Status</label>
                                                                            <select class="custom-select" id="status<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" name="status">
                                                                                <option>Status</option>
                                                                                <option value="1" <?php if ($row['status'] == "1") echo "Selected" ?>>Started</option>
                                                                                <option value="2" <?php if ($row['status'] == "2") echo "Selected" ?>>Pending</option>
                                                                                <option value="3" <?php if ($row['status'] == "3") echo "Selected" ?>>On-Progress</option>
                                                                                <option value="4" <?php if ($row['status'] == "4") echo "Selected" ?>>Done</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary" name="submit" onclick="editsave(<?php echo $row['id']; ?>)">Save changes</button>
                                                                </div>
                                                        </div>

                                                    </div>
                                                </div>





                                            </div>




                                            </form>






                        </div>
                        </tr>
                    <?php
                                        $i++;
                                    }
                    ?>



                    </table>
                    </div>
                </div>

            </div>



        </div>

    </div>

    </div>

</section>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="plugins/toastr/toastr.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
    $(function() {

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            // "responsive": true,
            "scroolX": true,
        });
    });
</script>

<script>
    function save() {
        var startdate = $("#startdate").val();
        var starttime = $("#starttime").val();
        var endtime = $("#endtime").val();
        var taskdetails = $("#taskdetails").val();
        var status = $("#status").val();
        var loginid = $("#loginid").val();
        if (startdate == "") {
            alert("startdate must be filled out");
            return false;
        }
        if (starttime == "") {
            alert("starttime must be filled out");
            return false;
        }
        if (endtime == "") {
            alert("endtime must be filled out");
            return false;
        }
        if (taskdetails == "") {
            alert("taskdetails must be filled out");
            return false;
        }
        if (status == "status") {
            alert("status must be filled out");
            return false;
        } else if (startdate != "") {

            $.ajax({
                url: "api/createtask.php",
                method: "POST",
                dataType: "text",
                data: {

                    "startdate": startdate,
                    "starttime": starttime,
                    "endtime": endtime,
                    "taskdetails": taskdetails,
                    "status": status,
                    "loginid": loginid,

                },
                success: function(msg) {
                    console.log(msg);
                    var message = msg;
                    if (message == "Success") {

                        success();
                    } else {
                        error();
                    }
                }
            })
        }


    }

    function error() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        Toast.fire({
            icon: 'error',
            title: 'Please Check.'
        });

    }

    function success() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        Toast.fire({
            icon: 'success',
            title: 'Task Added Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function editsave(id) {
        var id = id;
        var startdate = $("#startdate" + id).val();
        var starttime = $("#starttime" + id).val();
        var endtime = $("#endtime" + id).val();
        var taskdetails = $("#taskdetails" + id).val();
        var status = $("#status" + id).val();

        if (startdate == "") {
            alert("startdate must be filled out");
            return false;
        }
        if (starttime == "") {
            alert("starttime must be filled out");
            return false;
        }
        if (endtime == "") {
            alert("endtime must be filled out");
            return false;
        }
        if (taskdetails == "") {
            alert("taskdetails must be filled out");
            return false;
        }
        if (status == "") {
            alert("status must be filled out");
            return false;
        } else if (startdate !== "" && starttime !== "" && endtime !== "" && taskdetails !== "" && status !== "") {
            $.ajax({
                type: "GET",
                url: "api/updatetask.php",
                datatype: "text",
                data: {
                    "id": id,
                    "startdate": startdate,
                    "starttime": starttime,
                    "endtime": endtime,
                    "taskdetails": taskdetails,
                    "status": status,

                },
                success: function(msg) {
                    console.log(msg);
                    var message = msg;
                    if (message == "success") {
                        editsuccess();
                    } else {
                        error();
                    }
                }
            })
        }
    }

    function editsuccess() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        Toast.fire({
            icon: 'success',
            title: 'Task Edited Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function deleterecord(id) {

        var deleteid = id;
        $.ajax({
            type: "POST",
            url: "api/deletetask.php",
            data: {

                "deleteid": deleteid,

            },
            success: function(msg) {
                console.log(msg);
                var message = msg;

                if (message == "success") {

                    deletesuccess();

                } else {
                    error();
                }
            }
        })
    }

    function deletesuccess() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        Toast.fire({
            icon: 'success',
            title: 'Deleted Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }
</script>


<!-- Add the HTML <input> element  -->

<script>
    // initialize the DatePicker component
    var datepicker = new ej.calendars.DatePicker();
    // Render the initialized DatePicker.
    datepicker.appendTo('#startdate')
</script>
<script type="text/javascript">
    $("input[name='myTime']").timeInput(); // use default or html5 attributes
    // $("input[name='myTime2']").timeInput({min: "6:00", max: "15:00", step: 900}); // 15 min intervals from 6:00 am to 3:00 pm
</script>
<script type="text/javascript">
    $("input[name='endtime']").timeInput(); // use default or html5 attributes
    // $("input[name='myTime2']").timeInput({min: "6:00", max: "15:00", step: 900}); // 15 min intervals from 6:00 am to 3:00 pm
</script>

<!-- <script>
    var firstOpen = true;
    var time;

    $('#endtime').datetimepicker({
        useCurrent: false,
        format: "hh:mm A"
    }).on('dp.show', function() {
        if (firstOpen) {
            time = moment().startOf('day');
            firstOpen = false;
        } else {
            time = "01:00 PM"

        }

        $(this).data('DateTimePicker').date(time);
    });
</script> -->