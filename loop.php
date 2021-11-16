<?php 
#for loop vv
echo "for loop vv<br>";
for($i=1;$i<=9;$i+=2){
    echo "fuck number $i <br>";
   #or use >> echo "the number is ".$i. " <br>";
}

#while loop vv
echo "while loop vv<br>";
$p = 1;
while ($p <=9){
    echo " number $p <br>";
    $p++;
}

#do-while loop vv
echo "do-while loop vv <br>";
$q = 1;
do{
    echo "number is $q <br>";
    $q++;
}while($q<=9);

#continue-break use vv
echo "continue use vv <br>";
for($b=1;$b<=9;$b++){
    if($b%2 == 0){
        continue;
    }
    echo "fuck continue number $b <br>";
}
echo "break use vv <br>";
for($b=1;$b<=9;$b++){
    if($b == 5){
       break;
    }
    echo "fuck break number $b <br>";
}
?>