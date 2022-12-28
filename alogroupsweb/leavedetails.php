<?php

session_start();
$session_value = '';
if (isset($_SESSION['id'])) {
    $session_value .= $_SESSION['id'];
}
// echo  $session_value;
?>
<?php
require('database/db.php');
$query = ("SELECT leave_details.id,leave_details.leavefrom,leave_details.leaveto,leave_details.leavetype,leave_details.reason,leave_details.status,leave_details.deletestatus,login.username,login.email from leave_details LEFT JOIN login ON login.id=leave_details.loginid WHERE leave_details.deletestatus=1");
$result = mysqli_query($conn, $query);

?>
<!-- // if (!isset($_SESSION)) {
//   session_start();
// } -->
<link rel="stylesheet" href="assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="assets/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="table2excel.js" type="text/javascript"></script>
<script type="text/javascript" src="assets\js\xlsx.full.min.js"></script>



<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type='text/javascript'>
    $(document).ready(function() {
        $('.dateFilter').datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>

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
<br>
<br>
<section class="content" id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Leave Details </h3>

                    </div>

                    <div class="card-body ">
                        <section>



                            <div style="margin-left:auto;">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="color: #0054A8;" for="">SEARCH :</label>
                                            <input id="myInput" type="text" placeholder="Search..">
                                        </div>
                                    </div>
                                    <form method='post' action=''>
                                        <div class="row">

                                            <div class="col-3">
                                                Start Date <input type='text' class='dateFilter' name='startdate' value='<?php if (isset($_POST['startdate'])) echo $_POST['startdate']; ?>'>
                                            </div>
                                            <div class="col-3">
                                                End Date <input type='text' class='dateFilter' name='enddate' value='<?php if (isset($_POST['enddate'])) echo $_POST['enddate']; ?>'>
                                            </div>
                                            <div class="col-3">
                                                <input type='submit' name='but_search' value='Search'>
                                            </div>
                                            <div class="col-3">
                                                <button id="btnExport" class="btn btn-success float-right mt-6" onclick="fnExcelReport();"><i class="fas fa-plus"></i>&nbsp;Export As Excel</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>


                            </div>

                        </section>

                        <div class="container-fluid">

                            <table id="example2" name="tbl_exporttable_to_xls" class="table table-bordered ">
                                <!-- <table id="studentTable" class="table2excel" data-tableName="Student Table 1"> -->

                                <thead>
                                    <tr>

                                        <th>s.no</th>
                                        <th> Emp Name </th>
                                        <th> Leave From</th>
                                        <th> Leave To </th>
                                        <th> Leave Type </th>
                                        <th>Reason</th>
                                        <th>status</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $i = 1;
                                    ?>
                                    <?php
                                    // $image = $rows['resume'];
                                    if (isset($_POST['but_search'])) {
                                        $startdate = $_POST['startdate'];
                                        $enddate = $_POST['enddate'];

                                        if (!empty($startdate) && !empty($enddate)) {
                                            $query .= " and leavefrom
                                between '" . $startdate . "' and '" . $enddate . "' ";
                                        }
                                    }
                                    $query .= " ORDER BY leavefrom DESC";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($rows = mysqli_fetch_assoc($result)) {

                                    ?>


                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $rows['username']; ?></td>
                                                <td><?php echo $rows['leavefrom']; ?></td>
                                                <td><?php echo $rows['leaveto']; ?></td>
                                                <td>

                                                    <?php
                                                    if ($rows['leavetype'] == 1) {
                                                        echo "<span class='badge badge-success'>Casual Leave</span>";
                                                    } elseif ($rows['leavetype'] == 2) {
                                                        echo "<span class='badge badge-primary'>Other</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $rows['reason']; ?></td>
                                                <td>

                                                    <?php
                                                    if ($rows['status'] == 1) {
                                                        echo "<span class='badge badge-info'>Pending</span>";
                                                    } elseif ($rows['status'] == 2) {
                                                        echo "<span class='badge badge-secondary'>Approved</span>";
                                                    } elseif ($rows['status'] == 3) {
                                                        echo "<span class='badge badge-danger'>Rejected</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- <a style="margin-right: 10px;cursor:pointer" data-toggle="modal" data-target="#viewmodal-default<?php echo $row['id']; ?>"><i class="nav-icon fas fa-eye"></i></a> -->
                                                    <a style="margin-right: 10px;cursor:pointer" data-toggle="modal" data-target="#viewmodal-default<?php echo $rows['id']; ?>"><i class="nav-icon fas fa-eye"></i></a>

                                                </td>

                                                <!-- view start -->
                                                <div class="modal fade" id="viewmodal-default<?php echo $rows['id']; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">LeaveDetails</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="container-fluid">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">User name</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php echo $rows['username']; ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="username<?php echo $rows['id']; ?>" name="username" value=<?php echo $rows['username']; ?>>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php echo $rows['email']; ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="email<?php echo $rows['id']; ?>" name="email" value=<?php echo $rows['email']; ?>>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-sm-4">
                                                                                    <input type="hidden" id="leavefrom" name="leavefrom" value=<?php echo $rows['leavefrom']; ?>>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Leave From</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php echo $rows['leavefrom']; ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="leavefrom<?php echo $rows['id']; ?>" name="leavefrom" value=<?php echo  $rows['leavefrom']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="hidden" id="leaveto" name="leaveto" value=<?php echo $rows['leaveto']; ?>>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Leave To</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php echo $rows['leaveto']; ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="leaveto<?php echo $rows['id']; ?>" name="leaveto" value=<?php echo  $rows['leaveto']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Leave Type</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" id="leavetype" name="leavetype" value=<?php echo $rows['leavetype']; ?>>
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php
                                                                                                            if ($rows['leavetype'] == 1) {
                                                                                                                echo "<span class='badge badge-success'>Casual Leave</span>";
                                                                                                            } elseif ($rows['leavetype'] == 2) {
                                                                                                                echo "<span class='badge badge-primary'>Other</span>";
                                                                                                            }
                                                                                                            ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="leaveto<?php echo $rows['id']; ?>" name="leaveto" value=<?php echo  $rows['leaveto']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="hidden" id="leavetype" name="reason" value=<?php echo $rows['reason']; ?>>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Reason</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php echo $rows['reason']; ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="reason<?php echo $rows['id']; ?>" name="reason" value=<?php echo  $rows['reason']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="hidden" id="status" name="status" value=<?php echo $rows['status']; ?>>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Status</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-8">

                                                                                    <div class="form-group">
                                                                                        <p class="text-sm"><?php
                                                                                                            if ($rows['status'] == 1) {
                                                                                                                echo "<span class='badge badge-info'>Pending</span>";
                                                                                                            } elseif ($rows['status'] == 2) {
                                                                                                                echo "<span class='badge badge-secondary'>Approved</span>";
                                                                                                            } elseif ($rows['status'] == 3) {
                                                                                                                echo "<span class='badge badge-danger'>Rejected</span>";
                                                                                                            }
                                                                                                            ?>
                                                                                        </p>
                                                                                        <input type="hidden" id="status<?php echo $rows['id']; ?>" name="status" value=<?php echo  $rows['status']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-success" name="Approve" onclick="approve(<?php echo $rows['id']; ?>)">Approve</button>
                                                            <button type="button" class="btn btn-danger" name="Reject" onclick="reject(<?php echo $rows['id']; ?>)">Reject</button>
                                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                                            <!-- 5 -->
                                                        </div>
                                                    </div>

                                                </div>

                        </div>
                        </tr>
                <?php
                                        }
                                    } else {
                                        echo "<tr>";
                                        echo "<td colspan='8'><center>No record found.</center></td>";
                                        echo "</tr>";
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
    function approve(id) {
        var id = id;
        var username = $("#username" + id).val();
        var email = $("#email" + id).val();
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
        } else if (leavefrom !== "" && leaveto !== "" && leavetype !== "" && reason !== "") {
            $.ajax({
                type: "post",
                url: "api/email.php",
                datatype: "text",
                data: {
                    "id": id,
                    "email": email,
                    "leavefrom": leavefrom,
                    "leaveto": leaveto,
                    "leavetype": leavetype,
                    "reason": reason,
                    "status": status,

                },
                success: function(msg) {
                    console.log(msg);
                    var message = msg;
                    if (message == "Leave Accepted") {
                        appsuccess();
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


    function appsuccess() {
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
</script>

<script>
    function reject(id) {
        var id = id;
        var username = $("#username" + id).val();
        var email = $("#email" + id).val();
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
        } else if (leavefrom !== "" && leaveto !== "" && leavetype !== "" && reason !== "") {
            $.ajax({
                type: "post",
                url: "api/rejectleave.php",
                datatype: "text",
                data: {
                    "email": email,
                    "leavefrom": leavefrom,
                    "leaveto": leaveto,
                    "leavetype": leavetype,
                    "reason": reason,
                    "status": status,
                },
                success: function(msg) {
                    console.log(msg);
                    var message = msg;
                    if (message == "Your Permission regarding leave has Denied") {
                        rejects();
                    } else {
                        error();
                    }
                }
            })
        }
    }

    function rejects() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        Toast.fire({
            icon: 'success',
            title: 'Leave Has Rejected.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }
</script>


<script>
    function fnExcelReport() {
        var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange;
        var j = 0;
        tab = document.getElementById('example2'); // id of table

        for (j = 0; j < tab.rows.length; j++) {
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text = tab_text + "</table>";
        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
        } else //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }
</script>