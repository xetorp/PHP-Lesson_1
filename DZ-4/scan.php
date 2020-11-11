<?php

$files = scandir("images");
//print_r($files);
for($i=2;$i<count($files);$i++){?>
    <a href="full_image.php?img=<?= $files[$i]?>">
        <img width="200" src="images/<?= $files[$i]?>">
    </a>    
    <hr>
<?php
}
?>