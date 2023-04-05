<?php
$str = "Hello there";
$convert = mb_convert_encoding($str, "UTF-16LE");
print_r($convert);
?>
