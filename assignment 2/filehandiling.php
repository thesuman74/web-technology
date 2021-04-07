<?php

$file = fopen("text.txt", "w");
$text = "Suman Adhikari";                 // To write into file
fwrite($file, $text);
fclose($file);
?>

<?php

$file = fopen("text.txt", 'r');
while (!feof($file)) {                    // to display on browser
	echo "<br>";
}
echo "File size is ".filesize("text.txt") . " byte <br>";   //to display file size
if(file_exists("text.txt"))
{
	echo "File exist <br>";                 // To check file existance
}
else
{
	echo "File not found <br>";
}
?>

<?php
$a = file("random.txt");
$count = $a[0];         
$count++;                                 // to check visitors
$file = fopen("random.txt", "w");
fputs($file,$count);
fclose($file);
echo $count;

?>