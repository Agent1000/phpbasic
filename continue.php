<?php
echo "ตัวอย่าง continue  <br>";
for($b=1;$b<=100;$b++){
    if(($b==1 || $b%2 == 0 || $b%3 == 0 || $b%5==0 || $b%7==0) 
    && ($b!=2 && $b!=3 && $b!=5 && $b!=7)){
    continue;
}
echo " $b &nbsp "; #&nbsp คือการเว้นวรรค
}
?>