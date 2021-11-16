<?php
$a = "hello";
echo ($a);
echo("<br>");

define("PROVINCE","Bangkok");
echo PROVINCE;
echo("<br>");

define("SALARY","15,000");
echo SALARY;
echo("<br>");

$t = date("H");
if ($t<"20"){
    echo "have a nice day";
    echo("<br>");
    echo $t;
    echo("<br>");
}else{
    echo "have a night!";
    echo("<br>");
}

if($t < "10"){
    echo "good moring";
    echo("<br>");
}elseif($t<"20"){
    echo "have a nice day";
    echo("<br>");
}else{
    echo"have a night!";
    echo("<br>");
}

$favcolor = "red";

switch($favcolor){
    case "red":
        echo "Your favorite color is red!";
        break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
            case "green":
                echo "Your favorite color is green!";
                break;
                default;
                echo "fuck you";
    }


?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </header>
    <body>
        <h1>
            <?php
            echo ($a);
            ?>
        </h1>
        <div style="font-size:larger; color:blue;">
            <?php
                echo "<b>คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจ 
                ประกอบด้วย 3 วิชาเอก</b>";
            ?>
        </div>
        <ul>
            <?php
                echo "<li>การจัดการ</li>";
                echo "<li>พัฒนาซอร์ฟแวร์</li>";
                echo "<li>มัลติมีเดีย</li>";
            ?>
        </ul>
        
    </body>
</html>