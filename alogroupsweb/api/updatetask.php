<?php
// header("Access-Control-Allow-Origin: *");
// header('Content-Type: text/plain');
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods:GET");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../database/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $startdate = $_GET['startdate'];
    $startdate = date('Y-m-d', strtotime($startdate));
    $starttime = $_GET['starttime'];
    $endtime = $_GET['endtime'];
    $taskdetails = $_GET['taskdetails'];
    $status = $_GET['status'];
    if (isset($id) && isset($startdate) && isset($starttime) && isset($endtime)) {
        $sql = "UPDATE task SET startdate='$startdate',starttime='$starttime', endtime='$endtime',taskdetails='$taskdetails',status='$status' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        if ($query) {


            echo  "success";
        } else {

            echo "Error";
        }
    }
} else {

    echo "Error Please Check";
}
