<?php
$T1 = 24;
$T2 = 21;
$T3 = 24;
$T4 = 12;

if($T1<=25 && $T2<=25 && $T3<=25 && $T4<=25){
    $Total = $T1+$T2+$T3+$T4; #รวมคะแนนจากการสอบ 4 ครั้ง
    
    if($Total>80 && $Total<=100){
        echo "ได้ เกรด A ครับ";
    }
    else if($Total>=75 && $Total<=79){
        echo "ได้ เกรด B+ ครับ";
    }
    else if($Total>=70 && $Total<=74){
        echo "ได้ เกรด B ครับ";
    }
    else if($Total>=65 && $Total<=69){
        echo "ได้ เกรด C+ ครับ";
    }
    else if($Total>=60 && $Total<=64){
        echo "ได้ เกรด C ครับ";
    }
    else if($Total>=55 && $Total<=59){
        echo "ได้ เกรด D+ ครับ";
    }
    else if($Total>=50 && $Total<=54){
        echo "ได้ เกรด D ครับ";
    }
    else if($Total<=49){
        echo "ได้ เกรด F ครับ เอาใหม่เนอะ สู้ๆ";
    }
}

else{
        echo "คะแนนสอบมัน เกินนะจ๊ะ";
    }


?>