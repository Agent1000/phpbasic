<?php
$no =$_POST['n'];

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
    <title>เลขไหนหาร 36 ลง</title>
    </header>
    <h1>กรอก เลข </h1>
    <body>
    <form action="gg3.php" method="POST">
    กรอกเลขเลย : <input type="number" name="n" /><br>
    <button type="submit" >ส่ง</button>
    </form>     
    </body>
</html>

<?php
echo "<br> ";
for($i=1;$i<=$no;$i++){
    $nt=36%$i;
    if($nt==0){
        echo "$i ";
    }
}
?>