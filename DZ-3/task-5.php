<?php

function delBackspace($str)
{
    $text = array(
        " " => "_"
    );
    return strtr($str, $text);
}
echo delBackspace("здесь могла быть ваша реклама");

?>