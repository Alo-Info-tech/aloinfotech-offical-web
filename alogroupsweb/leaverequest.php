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
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Leave </button>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Leave </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <input type="hidden" id="loginid" name="loginid" value=<?php echo  $session_value; ?>>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInput">Leave From</label>
                                        <input id="leavefrom" />

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInput">Leave To</label>
                                        <input id="leaveto" />

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleSelectBorder">Leave Type</label>
                                <select class="custom-select" id="leavetype" name="leavetype">
                                    <option>Select Leave</option>
                                    <option value="1">Casual Leave</option>
                                    <option value="2">Other</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInput">Reason</label>
                                <input class="form-control input-sm" id="reason" name="reason" type="text-area">

                            </div>
                        </div>




                        </form>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" name="submit" onclick="save()">Apply</button>
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
                                        <th>Leave From</th>
                                        <th>Leave To</th>
                                        <th>Leave Type</th>
                                        <th>Reason</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $vendor = mysqli_query($conn, "SELECT id,leavefrom,leaveto,leavetype,reason from leave_details WHERE deletestatus='1' AND loginid='$session_value'");
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($vendor)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row['leavefrom'] ?></td>
                                            <td><?php echo $row['leaveto'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['leavetype'] == 1) {
                                                    echo "<span class='badge badge-warning'>CasualLeave</span>";
                                                } elseif ($row['leavetype'] == 2) {
                                                    echo "<span class='badge badge-primary'>Other</span>";
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $row['reason'] ?></td>
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
                                                            <h4 class="modal-title">Delete Details</h4>
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
                                                            <h4 class="modal-title">Update Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Leave From</label>
                                                                            <input class="form-control input-sm" id="leavefrom<?php echo $row['id']; ?>" value="<?php echo $row['leavefrom']; ?>" name="DATESTART" type="Date">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Leave To</label>
                                                                            <input class="form-control input-sm" id="leaveto<?php echo $row['id']; ?>" value="<?php echo $row['leaveto']; ?>" name="DATEEND" type="Date">

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleSelectBorder">Leave Type</label>
                                                                            <select class="custom-select" id="leavetype<?php echo $row['id']; ?>" value="<?php echo $row['leavetype']; ?>" name="leavetype">
                                                                                <option>Select Leave</option>
                                                                                <option value="1" <?php if ($row['leavetype'] == "1") echo "Selected" ?>>Casual Leave</option>
                                                                                <option value="2" <?php if ($row['leavetype'] == "2") echo "Selected" ?>>Other</option>



                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Reason</label>
                                                                            <input class="form-control input-sm" id="reason<?php echo $row['id']; ?>" value="<?php echo $row['reason']; ?>" name="reason" type="text-area">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary" name="submit" onclick="editsave(<?php echo $row['id']; ?>)">Apply</button>
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
        var leavefrom = $("#leavefrom").val();
        var leaveto = $("#leaveto").val();
        var leavetype = $("#leavetype").val();
        var reason = $("#reason").val();
        var status = $("#status").val();
        var loginid = $("#loginid").val();
        if (leavefrom == "") {
            alert("leavefrom must be filled out");
            return false;
        }
        if (leaveto == "") {
            alert("leaveto must be filled out");
            return false;
        }
        if (leavetype == "") {
            alert("leavetype must be filled out");
            return false;
        }
        if (reason == "") {
            alert("reason must be filled out");
            return false;
        } else if (leavefrom != "" && leaveto != "") {

            $.ajax({
                url: "api/createleave.php",
                method: "POST",
                dataType: "text",
                data: {

                    "leavefrom": leavefrom,
                    "leaveto": leaveto,
                    "leavetype": leavetype,
                    "reason": reason,
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
            title: 'Leave Applied Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function editsave(id) {
        var id = id;
        var leavefrom = $("#leavefrom" + id).val();
        var leaveto = $("#leaveto" + id).val();
        var leavetype = $("#leavetype" + id).val();
        var reason = $("#reason" + id).val();
        var status = $("#status" + id).val();

        if (leavefrom == "") {
            alert("leavefrom must be filled out");
            return false;
        }
        if (leaveto == "") {
            alert("leaveto must be filled out");
            return false;
        }
        if (leavetype == "") {
            alert("leavetype must be filled out");
            return false;
        }
        if (reason == "") {
            alert("reason must be filled out");
            return false;
        }
        if (status == "") {
            alert("status must be filled out");
            return false;
        } else if (leavefrom !== "" && leaveto !== "" && leavetype !== "" && reason !== "" && status !== "") {
            $.ajax({
                type: "GET",
                url: "api/updateleave.php",
                datatype: "text",
                data: {
                    "id": id,
                    "leavefrom": leavefrom,
                    "leaveto": leaveto,
                    "leavetype": leavetype,
                    "reason": reason,
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
            title: 'Leave Updated Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function deleterecord(id) {

        var deleteid = id;
        $.ajax({
            type: "POST",
            url: "api/deleteleave.php",
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
    datepicker.appendTo('#leavefrom')
</script>
<script>
    // initialize the DatePicker component
    var datepicker = new ej.calendars.DatePicker();
    // Render the initialized DatePicker.
    datepicker.appendTo('#leaveto')
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