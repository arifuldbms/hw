<?php
$n1=500;
$n2=400;
$n3=300;

if($n1 < $n2 && $n1 < $n3)
{
    echo "lowest number:".$n1;
}
else if ($n2<$n3 && $n2<$n1)
{
    echo"lowest number:".$n2;
}
else
{
    echo"lowest number:".$n3;
}
?>