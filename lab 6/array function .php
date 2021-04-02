<?php
$name = array("lambogini","ferrari");
echo "I like ". $name[0] . " and " . $name[1] ."<br>";
echo "<br>";

$a = array(1,2,3);

echo array_sum($a). "<br>" . "<br>";

echo array_shift($name)."<br>" . "<br>";

echo count($a) ."<br>" . "<br>";

echo array_reverse($name) ."<br>" . "<br>";

echo array_fill_keys($a, $name);

?>