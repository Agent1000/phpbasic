<?php
require ('connect.php');

$update_ID = $_REQUEST['EmployeeID'];
$EmployeeID = $update_ID;
$Title = $_REQUEST['Title'];
$Name = $_REQUEST['Name'];
$Sex = $_REQUEST['Sex'];
$Education = $_REQUEST['Education'];
$Start_Date = $_REQUEST['Start_Date'];
$Salary = $_REQUEST['Salary'];
$DepartmentID = $_REQUEST['DepartmentID'];

$sql = "UPDATE employee SET Title='$Title' , Name='$Name',Sex='$Sex',Education='$Education',Start_Date='$Start_Date',Salary='$Salary',DepartmentID='$DepartmentID' WHERE EmployeeID='$EmployeeID' " ;

$objQuery = mysqli_query($conn,$sql);
if ($objQuery){
    echo "record " . $EmployeeID . "was Updated.";
}else {
    echo "Error : Update";
}

mysqli_close($conn);
echo "<br><br>";
echo "---END---";

?>
