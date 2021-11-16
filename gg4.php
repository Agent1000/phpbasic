<?php
$dates =$_POST['d'];

$sec = round ($dates/1000);
$mi = round ($sec/60);
$hour = round ($mi/60);
$dates2 = round ($hour/24);
$months = round ($dates2/30);
$years = round ($months/12);

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
    <title>แปลงเวลา</title>
    </header>
    <h1>กรอก ค่า มิลลิวินาที </h1>
    <body>
    <form action="gg4.php" method="POST">
    กรอก มิลลิวินาที : <input type="number" name="d" /><br>
    <button type="submit" >ส่ง</button>
    <button type="reset" >reset</button>
    </form>     
    </body>
</html>

<?php
echo "<br>";
echo $years." ปี ".$months." เดือน".$dates2."    วัน".$hour."    ชั่วโมง".$mi."   นาที".$sec."    วินาที"; 

?>