<p?

//access the global array called $_POST to get the values from the text fields
$size = $_POST["size"];

echo "Size: " . $size . "<br>";

for($i = 0; $i < $size; $i++)
{
	for($j = 0; $j < $size; $j++)
	{
		if($i == 0)
		{
			echo " ".$j;
		}
		else if($j == 0)
		{
			echo "<br>".$i;
		}
		else
		{
			echo " ".$i*$j;
		}
	}
}

?>