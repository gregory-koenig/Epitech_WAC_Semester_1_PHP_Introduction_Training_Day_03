<?php
function print_calls() {
   static $count = 1;
   echo $count;
   $count ++;
}
?>