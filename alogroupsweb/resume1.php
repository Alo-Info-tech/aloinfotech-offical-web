<?php
$conn = mysqli_connect("localhost", "root", "", "alogroups");
$query = "select * from career";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Fetch Data From Database </title>
</head>

<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4">
                <h2>Student Record</h2>
            </th>
        </tr>
        <th> name </th>
        <th> phoneno </th>
        <th> Email </th>
        <th> experience </th>
        <th>position</th>

        </tr>

        <?php while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['phoneno']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['experience']; ?></td>
                <td><?php echo $rows['position']; ?></td>

            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>