<?php
date_default_timezone_set("Asia/Bangkok"); # set timezone ในไทยก่อน
$by = 2543; # ปีเกิดตัวเอง
$y = date("Y") + 543; # แปลงจาก ค.ศ. เป็น พ.ศ
$old = $y - $by;
if($old<20 && $old >= 7){
    echo "อายุ $old <br> สามารถลงวิ่งได้ 2 รุ่น คือ <br>1. ไม่จำกัดอายุ  <br>3.ต่ำกว่าอายุ 20 ปี";
}
else if($old>=20 && $old <=30){
    echo "อายุ $old <br> สามารถลงวิ่งได้ 2 รุ่น คือ <br>1. ไม่จำกัดอายุ  <br>2. อายุ 20 ปีขึ้นไปแต่ไม่เกิน 30 ปี";
}
else if($old>30 && $old <70){
    echo "อายุ $old <br> สามารถลงวิ่งได้ รุ่นเดียว คือ <br>1. ไม่จำกัดอายุ";
}
else{
     echo "อายุ $old <br> <h1>อย่าลงเลยครับ อายุไม่ถึงเกณฑ์ หรือ เกินเกณฑ์ ครับ</h1>" ;
}

?>