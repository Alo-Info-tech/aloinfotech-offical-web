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
    $leavefrom = $_GET['leavefrom'];
    $leavefrom = date('Y-m-d', strtotime($leavefrom));
    $leaveto = $_GET['leaveto'];
    $leaveto = date('Y-m-d', strtotime($leaveto));
    $leavetype = $_GET['leavetype'];
    $reason = $_GET['reason'];
    $status = '1';
    if (isset($id) && isset($leavefrom) && isset($leaveto) && isset($leavetype) && isset($reason)) {
        $sql = "UPDATE leave_details SET leavefrom='$leavefrom',leaveto='$leaveto', leavetype='$leavetype',reason='$reason',status='$status' WHERE id='$id'";
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
