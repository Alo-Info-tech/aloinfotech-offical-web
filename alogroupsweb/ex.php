<?php
$conn = mysqli_connect("localhost", "root", "", "alogroups");
$query = ("SELECT task.id,task.loginid,task.startdate,task.starttime,task.endtime,task.taskdetails,task.status,task.deletestatus,login.id,login.email,login.username from task LEFT JOIN login ON login.id=task.loginid WHERE task.deletestatus=1");
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Export HTML table data to excel using JavaScript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>
<body>
    <div class="container">
    	<h2 class="text-center mt-4 mb-4">Export HTML table data to excel using JavaScript</h2>
    	<div class="card">
    		<div class="card-header">
    			<div class="row">
    				<div class="col col-md-6">Sample Data</div>
    				<div class="col col-md-6 text-right">
    					<button type="button" id="export_button" class="btn btn-success btn-sm">Export</button>
    				</div>
    			</div>
    		</div>
    		<div class="card-body">
    			<table id="employee_data" class="table table-striped table-bordered">
                    <tr>
                    <th>s.no</th>
        <th> Emp Name </th>
        <th> startdate</th>
        <th> starttime </th>
        <th> endtime </th>
        <th>taskdetails</th>
        <th>status</th>

                    </tr>
                    <?php
        $i = 1;
        ?>
                    <?php
                    foreach($result as $row)
                    {
                        echo '
                        <tr>
                        <td><?php echo $i++ ?></td>
                            <td>'.$row["username"].'</td>
                            <td>'.$row["startdate"].'</td>
                            <td>'.$row["starttime"].'</td>
                            <td>'.$row["endtime"].'</td>
                            <td>'.$row["taskdetails"].'</td>
                            <td>'.$row["status"].'</td>
                        </tr>
                        ';
                    }
                    ?>
                </table>
    		</div>
    	</div>
    </div>
</body>
</html>

<script>

    function html_table_to_excel(type)
    {
        var data = document.getElementById('employee_data');

        var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

        XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

        XLSX.writeFile(file, 'file.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });

</script>