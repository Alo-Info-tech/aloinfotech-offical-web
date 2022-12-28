<?php
require('database/db.php');

function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

$fileName = "employeedetails_" . date('Y-m-d') . ".xls";

$fields = array('SI.No', 'EmployeeName', 'Email', 'Password', 'Status');

$excelData = implode("\t", array_values($fields)) . "\n";

$query = $conn->query("SELECT id,username,email,password ,status from login WHERE usertype='User' AND status='1'");
if ($query->num_rows > 0) {
    $i = 0;
    // Output each row of the data 
    while ($row = $query->fetch_assoc()) {
        $i++;
        $status = ($row['status'] == 1) ? 'Active' : 'Inactive';
        $lineData = array($i, $row['username'], $row['email'], $row['password'], $status);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data 
echo $excelData;

exit;
