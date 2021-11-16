<?php
$s = array(5,7,3,28,55);
for($i=0;$i<count($s);$i++){
    $result = $s[$i]%2;
    if($result!=0){
        echo "$s[$i] ";
    }
}
