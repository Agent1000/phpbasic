<?php
$delete_ID = $_REQUEST['EmployeeID'];

require('connect.php');

$sql = '
    DELETE FROM employee
    WHERE EmployeeID = ' . $delete_ID . ';
';

$objQuery = mysqli_query($conn,$sql);
if ($objQuery){
    echo "Record" . $delete_ID . "was Deleted.";
}else {
    echo "Error : Delete";
}

mysqli_close($conn);
echo "<br><br>";
echo "---END---";
?>