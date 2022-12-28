<?php

session_start();
$session_value = '';
if (isset($_SESSION['id'])) {
    $session_value .= $_SESSION['id'];
}
// echo  $session_value;
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
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Add Employee Details </button>
                    <!-- <button type="button" class="exportToExcel" class="btn btn-success float-left"  name="export"><i class="fas fa-plus"></i>Export</button> -->
                    <!--<a href="exportemployeedetails.php" class="btn btn-success float-right mt-2"><i class="fas fa-plus"></i>Export As Excel</a>-->
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Employee Name</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter Employee Name" name="username" onblur="date()" onkeypress="person6()" autocomplete="off" required onkeydown="return /[a-z]/i.test(event.key)" />
                                        <div id="div1"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Email</label>
                                        <input type="text" class="form-control" id="email" onblur="validate()" onkeypress="person7()" placeholder="Enter Your Email" name="email" autocomplete="off">
                                        <div id="div2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- <input type="hidden" id="loginid" name="loginid" value=<?php echo  $session_value; ?>> -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInput">password</label>
                                        <input type="password" class="form-control" id="password" onblur="val()" onkeypress="person8()" placeholder="Enter Password" name="password" autocomplete="off">
                                        <div id="div3"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleSelectBorder">Status</label>
                                        <select class="custom-select" id="status" name="status">
                                            <option>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
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
                            <table id="example2" name="tbl_exporttable_to_xls" class="table table-bordered ">
                                <!-- <table id="studentTable" class="table2excel" data-tableName="Student Table 1"> -->

                                <thead>
                                    <tr>

                                        <th>SI.No</th>
                                        <th>EmployeeName</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $vendor = mysqli_query($conn, "SELECT id,username,email,password ,status from login WHERE usertype='User' AND status='1'");

                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($vendor)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['password'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['status'] == 1) {
                                                    echo "Active";
                                                } else {
                                                    echo "InActive";
                                                }
                                                ?></td>
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
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleSelectBorder">Employee Name</label>
                                                                            <input type="text" class="form-control" id="username<?php echo $row['id']; ?>" placeholder="Enter Username" name="username" value="<?php echo $row['username']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleSelectBorder">Email</label>
                                                                            <input type="text" class="form-control" id="email<?php echo $row['id']; ?>" placeholder="Enter Your Email" name="email" value="<?php echo $row['email']; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Password</label>
                                                                            <input type="email" class="form-control" id="password<?php echo $row['id']; ?>" placeholder="Enter Password" name="password" value="<?php echo $row['password']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleSelectBorder">Status</label>
                                                                            <select class="custom-select" id="status<?php echo $row['id']; ?>" name="status">
                                                                                <option>Status</option>
                                                                                <option value="1" <?php if ($row['status'] == "1") echo "Selected"; ?>>Active</option>
                                                                                <option value="2" <?php if ($row['status'] == "2") echo "Selected"; ?>>InActive</option>
                                                                            </select>
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
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var status = $("#status").val();
        if (username == "") {
            alert("username must be filled out");
            return false;
        }
        if (email == "") {
            alert("email must be filled out");
            return false;
        }

        if (password == "") {
            alert("password must be filled out");
            return false;
        }
        if (status == "status") {
            alert("status must be filled out");
            return false;

        } else if (username != "" && password !== "" && email !== "") {

            $.ajax({
                url: "api/createemp.php",
                method: "POST",
                dataType: "text",
                data: {

                    "username": username,
                    "email": email,
                    "password": password,
                    "status": status,
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
            title: 'User Added Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function editsave(id) {
        var id = id;
        var username = $("#username" + id).val();
        var email = $("#email" + id).val();
        var password = $("#password" + id).val();
        var status = $("#status" + id).val();
        if (username == "") {
            alert("username must be filled out");
            return false;
        }
        if (email == "") {
            alert("email must be filled out");
            return false;
        }

        if (password == "") {
            alert("password must be filled out");
            return false;
        }
        if (status == "") {
            alert("status must be filled out");
            return false;
        } else if (username !== "" && password !== "") {
            $.ajax({
                type: "GET",
                url: "api/updateemp.php",
                datatype: "text",
                data: {
                    "id": id,
                    "username": username,
                    "email": email,
                    "password": password,
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
            title: 'Users Edited Successfully.'
        })
        setTimeout(function() {

            location.reload(true);
        }, 1000);

    }



    function deleterecord(id) {

        var deleteid = id;
        $.ajax({
            type: "POST",
            url: "api/deleteemp.php",
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
<script>
    function date() {
        var name = document.getElementById("username").value;
        if (name === "") {
            document.getElementById("div1").innerHTML = "Enter the name";
            document.getElementById("div1").style.color = "Red";

        } else {
            document.getElementById("div1").innerHTML = "";
        }
    }

    function person6() {
        document.getElementById("div1").innerHTML = "";
    }
</script>
<script>
    function validate() {

        var Email = document.getElementById("email").value;

        var patcheck = new RegExp("^[a-z0-9]");
        if (Email === "") {
            document.getElementById("div2").innerHTML = "Enter the email address";
            document.getElementById("div2").style.color = "Red";
        } else if (Email.indexOf("@") > -1) {
            document.getElementById("div2").innerHTML = "";
        } else {

            document.getElementById("div2").innerHTML = "Enter the valid email address";
            document.getElementById("div2").style.color = "Red";

        }


    }

    function person7() {
        document.getElementById("div2").innerHTML = "";
    }
</script>
<script>
    function val() {
        var password = document.getElementById("password").value;
        var patcheck = new RegExp("^(?=.*\d).{4,8}$");
        if (password === "") {
            document.getElementById("div3").innerHTML = "Enter the password";
            document.getElementById("div3").style.color = "Red";
        } else {
            document.getElementById("div3").innerHTML = "";
        }
    }

    function person8() {
        document.getElementById("div3").innerHTML = "";
    }
</script>