<?php
require('database/db.php');

function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
$fileName = "leavedetails_" . date('Y-m-d') . ".xls";
$fields = array('s.no', 'Emp Name', 'Leave From', 'Leave To','Leave Type','Reason','Status');
$excelData = implode("\t", array_values($fields)) . "\n";
$query = $conn->query("SELECT leave_details.id,leave_details.leavefrom,leave_details.leaveto,leave_details.leavetype,leave_details.reason,leave_details.status,leave_details.deletestatus,leave_details.status,login.username,login.email from leave_details LEFT JOIN login ON login.id=leave_details.loginid WHERE leave_details.deletestatus=1");
if ($query->num_rows > 0) {
    $i = 0;
    // Output each row of the data 
    while ($row = $query->fetch_assoc()) {
        $i++;
        $status = ($row['status'] == 1) ? 'Active' : 'Inactive';
        $lineData = array($i, $row['username'], $row['leavefrom'], $row['leaveto'],$row['leavetype'],$row['reason'], $status);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}