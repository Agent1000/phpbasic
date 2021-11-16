<?php 
//array
    $cars=array("Volvo","BMW","Toyota");
    echo "I like " .$cars[0]." , ".$cars[1]." and ".$cars[2]." . <br>";
    echo"I like $cars[0] , $cars[1] and $cars[2].<br><br>";
    for($i=0;$i<count($cars);$i++){
        echo "$cars[$i] <br>"; //no <= เวลาต้องการ loop echo ออกมา
    }
// asociative array
    echo "<br>";
    $se=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
    echo "Peter is " . $se['Peter']." year old <br>";
    echo "joe is " . $se['joe']." year old <br>";
    echo "Ben is " . $se['Ben']." year old <br><br>";

    //multidimensional array
    $car=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    echo $car[0][0]." : In stock: ".$car[0][1]. ", sold:".$car[0][2].".<br>";
    echo $car[1][0]." : In stock: ".$car[1][1]. ", sold:".$car[1][2].".<br>";
    echo $car[2][0]." : In stock: ".$car[2][1]. ", sold:".$car[2][2].".<br>";
    echo $car[3][0]." : In stock: ".$car[3][1]. ", sold:".$car[3][2].".<br><br>";


    //Sort array
    sort($cars);
    for($i=0;$i<count($cars);$i++){
        echo "$cars[$i] <br>";
    }
    $number = array(4,58,68,2,31,0,1,4,2);
    sort($number);
    for($i=0;$i<count($number);$i++){
        echo "$number[$i] <br>";
    }
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

    </body>
</html>
