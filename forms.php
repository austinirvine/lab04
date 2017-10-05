<?php

$size = $_POST["size"];

echo " Size: " . $size . "<br>";

echo "<table>";
for($i = 0; $i < $size; $i++)
{
	echo "<td>";
	for($j = 0; $j < $size; $j++)
	{
		echo $i+$j;
		echo "<td>";
	}
	echo "<tr>";
}
echo "</table>";

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
