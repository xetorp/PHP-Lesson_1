<?php

$dir1 = "images/small";
$dir2 = "images/big";

$files = array_slice(scandir($dir1),2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГАЛЕРЕЯ</title>
</head>
<body>
    <H1>Моя Галерея</H1>
<?php

for ($i = 0; $i < count($files); $i++) { ?>
    <a  href="<?=$dir2."/".$files[$i]?>" target="_blank"><img src="<?=$dir1."/".$files[$i]?>" alt="тут фото"></a><?

if(($i - 1) % 4 ==0){?>
    <hr>
<?php }
 }
?>
</body>
</html>