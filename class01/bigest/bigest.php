<?php
$a1=500;
$a2=400;
$a3=300;

if ($a1 > $a2 && $a1 > $a3)
    {
        echo "biggest number:".$a1;
    }
    else if($a2 > $a1 && $a2 > $a3)
    {
        echo "biggest number:".$a2;
    }
    else
    {
        echo "biggest number:".$a3;
    }
?>