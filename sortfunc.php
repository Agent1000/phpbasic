<?php
echo "<p><font color=red><h1>ตัวอย่างการเรียงข้อมูล array sort </h1></font></p> <br>";

$test = array(47,545,6,11,02,44,23.2);
$AStest = array("A"=>"54","B"=>"7","C"=>"11","D"=>"32","E"=>"100","F"=>"-5");

echo "<h3>rsort() (เรียงจากมากไปน้อย) </h3> <br>";
rsort($test);
for($i=0;$i<count($test);$i++){
    echo "$test[$i] ";
}
 
echo "<br> <h3>asort() (เรียงเฉพาะ value โดยเรียงจากน้อยไปมาก) </h3> <br>";
asort($AStest);
foreach($AStest as $A=>$A_value){
    echo "Key= $A Value= $A_value <br>" ;
}

echo "<br> <h3>ksort() (เรียงเฉพาะ key โดยเรียงจากน้อยไปมาก) </h3> <br>";
ksort($AStest);
foreach($AStest as $A=>$A_value){
    echo "Key= $A Value= $A_value <br>" ;
}

echo "<br> <h3>arsort() (เรียงเฉพาะ value โดยเรียงจากมากไปน้อย) </h3> <br>";
arsort($AStest);
foreach($AStest as $A=>$A_value){
    echo "Key= $A Value= $A_value <br>" ;
}

echo "<br> <h3>krsort() (เรียงเฉพาะ key โดยเรียงจากมากไปน้อย) </h3> <br>";
krsort($AStest);
foreach($AStest as $A=>$A_value){
    echo "Key= $A Value= $A_value <br>" ;
}
?>