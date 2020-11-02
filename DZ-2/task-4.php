<?php

echo "Первый аргумент: ", $arg1 = rand( -99, 99), "<hr>";
echo "Второй аргумент: ", $arg2 = rand( -99, 99), "<hr>";
echo "Выбранная операция ", $operation = "+", "<hr>";

function mathOperation($arg1, $arg2, $operation) {
switch ($operation){

case "+":
return $arg1+$arg2;
break;

case "-":
return $arg1-$arg2;
break;

case "*":
return $arg1*$arg2;
break;

case "/":
return $arg1/$arg2;
break;
}

}
echo $arg1, $operation, $arg2, " равно ", mathOperation($arg1, $arg2, $operation), "<hr>" ;


?>