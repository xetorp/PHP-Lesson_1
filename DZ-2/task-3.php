<?php

function sum($a,$b) {
    $res = $a + $b;
    echo $res."<hr>";
    return $res;
}
sum(rand(2,99),rand(1,87));

function operation2($a,$b) {
    $res = $a - $b;
    echo $res."<hr>";
    return $res;
}
operation2(rand(2,99),rand(1,87));

function operation3($a,$b) {
    $res = $a / $b;
    echo $res."<hr>";
    return $res;
}
operation3(rand(2,99),rand(1,87));

function operation4($a,$b) {
    $res = $a * $b;
    echo $res."<hr>";
    return $res;
}
operation4(rand(2,99),rand(1,87));

?>           