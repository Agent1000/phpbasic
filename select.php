<?php
$severname= 'localhost';
$username='root';
$password='';
$dbname='dbemp';

$conn= mysqli_connect($severname,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");

$sql = '
    SELECT *
    FROM employee
     ';

$objQuery = mysqli_query($conn,$sql) or die("Error Query[" . $sql . "]");
?>


<!DOCTYPE html>
<html lang="en">
<header>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href = "bootstrap/dist/js/bootstrap.bundle.min.js">
    <title></title>
</header>

<body>
    <table border="1">
        <tr>
            <th width="50">
                <dlv align="center">NO</dlv>
            </th>
            <th width="100">
                <dlv align="center">EmployeeID</dlv>
            </th>
            <th width="100">
                <dlv align="center">Title</dlv>
            </th>
            <th width="100">
                <dlv align="center">Name</dlv>
            </th>
            <th width="100">
                <dlv align="center">Sex</dlv>
            </th>
            <th width="100">
                <dlv align="center">Education</dlv>
            </th>
            <th width="100">
                <dlv align="center">Start_Date</dlv>
            </th>
            <th width="100">
                <dlv align="center">Salary</dlv>
            </th>
            <th width="100">
                <div align="center">DepartmentID</div>
            </th>
        </tr>
        <?php
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)){
            ?>
        <tr>
            <td>
                <div align="center"><?php echo $i ?></div>
            </td>
            <td><?php echo $objResult["EmployeeID"];?></td>
            <td><?php echo $objResult["Title"];?></td>
            <td><?php echo $objResult["Name"];?></td>
            <td><?php echo $objResult["Sex"];?></td>
            <td><?php echo $objResult["Education"];?></td>
            <td><?php echo $objResult["Start_Date"];?></td>
            <td><?php echo $objResult["Salary"];?></td>
            <td><?php echo $objResult["DepartmentID"];?></td>
            <td align="center"><a href= "Del.php?EmployeeID=<?php echo $objResult["EmployeeID"]; ?>">Delete</a></td>
            <td align="center"><a href= "Updatedata.php?EmployeeID=<?php echo $objResult["EmployeeID"]; ?>">Update</a></td>
        </tr>
        <?php
        $i++;
    }
        ?>

    </table>
</body>

</html>
