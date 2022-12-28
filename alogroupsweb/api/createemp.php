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
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = 'User';
$status = $_POST['status'];
if (!empty($username)&& !empty($email) && !empty($password)) {
    $vendor1 = mysqli_query($conn,"SELECT username,email,password,status FROM login WHERE usertype='User' And status='1'and email='$email' and password='$password'");
    $sqlven = mysqli_fetch_array($vendor1);
    if (!empty($vendor1)) {
        $sql = "INSERT INTO login(username,email,password,usertype,status)VALUES('$username','$email','$password','$usertype','$status')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            http_response_code(201);
            echo "Success";
        } else {
            http_response_code(503);
            echo "Error";
        }
    }
} else {
    http_response_code(400);
    echo "Error Please Check.";
}
