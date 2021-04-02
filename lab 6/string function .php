<?php
$str = "Hello Everyone";

echo addcslashes($str, 'E') ."<br>";

echo addslashes($str)."<br>";

echo bin2hex($str)."<br>";

echo convert_uuencode($str)."<br>";

echo chop($str,"Everyone")."<br>";

print_r(explode(" ","$str"))."<br>";

echo count_chars($str,3). "<br>";

echo chunk_split($str,1,".")."<br>";

?>