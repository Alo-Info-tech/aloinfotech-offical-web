<?php
require('database/db.php');
$query = "select * from career ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Fetch Data From Database </title>
</head>

<body>
    <table id="example2" class="table table-bordered table-hover">
        <thead>

        </thead>
        <tr>
            <th colspan="4">

            </th>
        </tr>
        <th>S.No</th>
        <th> Name </th>
        <th> phoneno </th>
        <th> Email </th>
        <th> Experience </th>
        <th>Applyforpost</th>
        <th>Resume</th>


        </tr>
        <?php
        $i = 1;
        ?>
        <?php while ($rows = mysqli_fetch_assoc($result)) {
            $image = $rows['resume'];
        ?>

                <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['phoneno']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['experience']; ?></td>
                <td><?php echo $rows['Applyforpost']; ?></td>
                <!-- <td><?php echo  $image; ?></td> -->
                <td><?php echo '<a href="../resumes/' . $image . '"><i class="fa fa-eye" aria-hidden="true"></i></a>'; ?></td>
                <!-- <td><?php echo '<a href="../resumes/' . $image . '"><img src="resumes/' . $image . '"/></a>'; ?></td> -->
                <!-- echo "<a href='download.php?file=".$entry."'>".$entry."</a>\n"; -->

            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>