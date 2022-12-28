<?php
// header("Access-Control-Allow-Origin: *");
// header('Content-Type: text/plain');
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
if (!isset($_SESSION)) {
    session_start();
}
include_once '../database/db.php';
$leavefrom = $_POST['leavefrom'];
$leavefrom = date('Y-m-d', strtotime($leavefrom));
$leaveto = $_POST['leaveto'];
$leaveto = date('Y-m-d', strtotime($leaveto));
$leavetype = $_POST['leavetype'];
$reason = $_POST['reason'];
$status = '1';
$deletestatus = '1';
$loginid = $_POST['loginid'];
if (!empty($leavefrom && !empty($leaveto))) {
    $sql = "INSERT INTO leave_details(loginid,leavefrom,leaveto,leavetype,reason,status,deletestatus)VALUES('$loginid','$leavefrom','$leaveto','$leavetype','$reason','$status','$deletestatus')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        http_response_code(201);
        echo "Success";
    } else {
        http_response_code(503);
        echo "Error";
    }
} else {
    http_response_code(400);
    echo "Error Please Check.";
}
