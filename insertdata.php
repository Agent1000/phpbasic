<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    </header>
        <body>
            <h1>Insert Data : Employee</h1>
            <form action = "insert.php" method = "post" name="Employee" >
                <table border = "1">
                    <tr>
                        <td>EmployeeID : </td>
                        <td><input type = "text" name = "EmployeeID" ></td>
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
                        <td><input type = "text" name = "DepartmentID" ></td>
                    </tr>
                </table>
                <br>
                <input type = "submit" value="Insert Data">

            </form>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>

</html>