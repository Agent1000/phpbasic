<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
    <title></title>
    </header>
<body>
    <?php
    $tax=457222; #<< ตรงนี้คือกำหนด รายได้สุทธิ
        if($tax<=150000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            echo "<b>ได้รับยกเว้นภาษี</b> <br>";
        }
        else if($tax>150000&&$tax<=300000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = ($tax-150000)*(0.05);
            echo "<b>อัตราภาษี  5% รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>300000&&$tax<=500000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (7500+($tax-300000)*(0.1));
            echo "<b>อัตราภาษี  10%  บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 7,500 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>500000&&$tax<=750000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (27500+($tax-500000)*(0.15));
            echo "<b>อัตราภาษี  15% บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 27,500 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>750000&&$tax<=1000000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (65000+($tax-750000)*(0.2));
            echo "<b>อัตราภาษี  20% บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 65,000 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>1000000&&$tax<=2000000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (115000+($tax-1000000)*(0.25));
            echo "<b>อัตราภาษี  25% บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 115,000 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>2000000&&$tax<=5000000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (365000+($tax-2000000)*(0.3));
            echo "<b>อัตราภาษี  30% บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 365,000 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
        else if($tax>5000000){
            echo "รายได้สุทธิ = $tax บาท <br>";
            $T_R = (1265000+($tax-5000000)*(0.35));
            echo "<b>อัตราภาษี 35% บวกกับภาษีสูงสุดในแต่ละชั้นสะสม 1,265,000 บาท รวมทั้งสิ้น $T_R  บาท</b>  <br>";
        }
    ?>

</body>
</html>