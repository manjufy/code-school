<?php
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b; // output 21, 21
?>