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
$query = ("SELECT task.id,task.loginid,task.startdate,task.starttime,task.endtime,task.taskdetails,task.status,task.deletestatus,login.id,login.username  from task LEFT JOIN login ON login.id=task.loginid WHERE task.deletestatus=1");
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
                        <h3 class="card-title">Task Details </h3>
                        
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
                                    <th> startdate</th>
                                    <th> starttime </th>
                                    <th> endtime </th>
                                    <th>taskdetails</th>
                                    <th>status</th>



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
                $query .= " and startdate
                                between '" . $startdate . "' and '" . $enddate . "' ";
            }
        }
        $query .= " ORDER BY startdate DESC";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {

        ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['startdate']; ?></td>
                    <td><?php echo $rows['starttime']; ?></td>
                    <td><?php echo $rows['endtime']; ?></td>
                    <td><?php echo $rows['taskdetails']; ?></td>
                    <td>

                        <?php
                        if ($rows['status'] == 1) {
                            echo "<span class='badge badge-warning'>Started</span>";
                        } elseif ($rows['status'] == 2) {
                            echo "<span class='badge badge-secondary'>Pending</span>";
                        } elseif ($rows['status'] == 3) {
                            echo "<span class='badge badge-primary'>On-Progress</span>";
                        } elseif ($rows['status'] == 4) {
                            echo "<span class='badge badge-success'>Done</span>";
                        }
                        ?>
                    </td>
                </tr>

        <?php
            }
        } else {
            echo "<tr>";
            echo "<td colspan='7'><center>No record found.</center></td>";
            echo "</tr>";
        }
        ?>
        <!-- <a href="exporttaskdetails.php" class="btn btn-success float-right"><i class="fas fa-plus"></i>Export As Excel</a> -->
       
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

