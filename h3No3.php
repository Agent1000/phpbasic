<?php
   $number = array(4,58,68,2,31,0,1,4,2);
   for($i=0;$i<count($number);$i++){
      do {echo "$number[$i] ";
        $i++;
        if($i<count($number)){
            echo" , ";
        }
       } while($i<count($number));
       echo ".";
}
?>