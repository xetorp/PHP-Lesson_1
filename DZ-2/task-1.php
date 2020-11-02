<?php 

$a = rand(-50,50);
$b = rand(-50,50);

if($a >= 0 && $b >=0){
    echo $a - $b;
}
elseif($a < 0 && $b < 0){
    echo $a * $b;
}
elseif($a < 0 && $b >= 0){
    echo $a + $b;
}
elseif($a >= 0 && $b < 0){
    echo $a + $b;
}

?>