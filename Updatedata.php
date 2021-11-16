<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link  rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    </header>
        <body>
            <?php
            $EmployeeID = $_REQUEST['EmployeeID']
            ?>
            <h1>Insert Data : Employee</h1>
            <form action = "update.php?EmployeeID=<?php echo $EmployeeID; ?>" method = "post" name="Employee" >
                <table border = "1">
                    <tr>
                        <td>EmployeeID : </td>
                        <td><input type = "text" name = "EmployeeID" value="<?php echo $EmployeeID;?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Title : </td>
                        <td><select name="Title">
                                <option value="นาย">นาย</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Name : </td>
                        <td><input type = "text" name = "Name" ></td>
                    </tr>
                        <td>Sex : </td>
                        <td>
                        <input type="radio" name="Sex" value="ชาย"> ชาย
                        <input type="radio" name="Sex" value="หญิง"> หญิง
                        </td>
                    </tr>
                    <tr>
                        <td>Education : </td>
                        <td><select name="Education">
                                <option value="ปริญญาตรี">ปริญญาตรี</option>
                                <option value="ปริญญาโท">ปริญญาโท</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Start_Date : </td>
                        <td><input type = "date" name = "Start_Date" ></td>
                    </tr>
                    <tr>
                        <td>Salary : </td>
                        <td><input type = "number" name = "Salary" ></td>
                    </tr>
                    <tr>
                        <td>DepartmentID : </td>
                        <?php
                        // DepartmentID Query from Table
                        require('connect.php');
                        $sql = 'SELECT DepartmentID FROM department';
                        $objQuery = mysqli_query($conn,$sql) or die("Error Query[".$sql."]");
                        ?>
                        <td><select name="DepartmentID">
                            <?php
                                    while ($objResult = mysqli_fetch_array($objQuery)){
                            ?>
                                <option value=<?php echo $objResult["DepartmentID"]; ?>><?php echo $objResult["DepartmentID"];?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <input type = "submit" value="Insert Data">

            </form>
            <?php
            mysqli_close($conn);
            echo "<br><br>";
            echo "---END---";
            ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
</html>