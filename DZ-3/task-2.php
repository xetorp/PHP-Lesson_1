<?php 

$a = 10;
$b = 0;
function pow1($b) {
  if ($b == 0) {
    return "$b" . ' - это ноль<br />';
  }
  if ($b % 2) {
    return "$b" . ' - нечетное число<br />';
  } else {
    return "$b" . ' - четное число<br />';
  }
}
 
do {
  echo pow1($b);
  $b++;
} while ($b <= $a); 

?>