<?php

$content = file_get_contents("https://www.bbc.com/news");

file_put_contents("outer.php",$content);

header("Location: outer.php");