<?php
function f1(){

    echo "<h1>Hello PHP</h1>";
}

function f2(){

    return "<h1>Hello PHP</h1>";
}

function f3($a,$b,$c){

    echo $a+$b+$c;
   
}
   f1();
   f2();
   f3(3,4,8);
?>
