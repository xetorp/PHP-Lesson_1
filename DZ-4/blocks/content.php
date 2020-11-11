<?php
    $file = fopen("files/test.txt","r");
    while(!feof($file)){
        echo fgets($file)."<br>";
    }
    fclose($file);
?>
<a href="gallery.php"><h1>Галерея</h1></a>
<br>
<a href="form.php"><h1>Загрузить</h1></a>
<br>


Сегодня <?= date("d.m.Y")?>