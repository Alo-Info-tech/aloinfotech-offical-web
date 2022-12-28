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
$startdate = $_POST['startdate'];
$startdate = date('Y-m-d', strtotime($startdate));
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];
$taskdetails = $_POST['taskdetails'];
$status = $_POST['status'];
$deletestatus = '1';
$loginid = $_POST['loginid'];
if (!empty($startdate && !empty($starttime))) {
    $sql = "INSERT INTO task(loginid,startdate,starttime,endtime,taskdetails,status,deletestatus)VALUES('$loginid','$startdate','$starttime','$endtime','$taskdetails','$status','$deletestatus')";
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
