<?php
error_reporting(0);
$no1 = $_POST['number1'];
$no2 = $_POST['number2'];
$no3 = $_POST['number3'];
$no4 = $_POST['number4'];
$no5 = $_POST['number5'];

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
    <title></title>
    </header>
    <body>
        <form action="number.php" method="POST">
            number 1 : <input type="number" name="number1"><br>
            number 2 : <input type="number" name="number2"><br>
            number 3 : <input type="number" name="number3"><br>
            number 4 : <input type="number" name="number4"><br>
            number 5 : <input type="number" name="number5"><br>
            <input type="submit" value="send"><br>
            <input type="reset" value="reset">
        </form>
    </body>
</html>
<?php
    if(isset($no1)){
        $sum = $no1+$no2+$no3+$no4+$no5;
        echo $sum;
    }else{
        echo "ไม่มีข้อมูล";
    }
?>