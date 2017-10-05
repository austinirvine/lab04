<p?

//access the global array called $_POST to get the values from the text fields
$numberCorrect = 0;

$size = $_POST["size"];
$movie = $_POST["movie"];
$mars = $_POST["mars"];
$paper = $_POST["paper"];
$sugar = $_POST["sugar"];

$stSize = "earth";
$stMovie = "moon";
$stMars = "maven";
$stPaper = "fifty";
$stSugar = "onehundred";

echo "<br> The quiz results are: <br> ";


echo "<br> Which planet is the biggest<br><br> ";
echo "Your Answer     : " . $size . "<br>";
echo "Correct Answer : " . $stSize . " <br> ";

echo "<br> In 2009, a movie came out about the clones being on the Moon, what was its name?<br><br>";
echo "Your Answer : " . $movie . "<br>";
echo "Correct Answer : " . $stMovie . "<br>";

echo "<br> Which Mars mission is studying the atmosphere of Mars?<br><br>";
echo "Your Answer : " . $mars . "<br>";
echo "Correct Answer : " . $stMars . "<br>";

echo "<br> How many times must you fold a sheet of paper to reach the Sun?<br><br>";
echo "Your Answer : " . $paper . "<br>";
echo "Correct Answer : " . $stPaper . "<br>";

echo "<br> How many cups of sugar does it take to get to the Moon?<br><br>";
echo "Your Answer : " . $sugar . "<br>";
echo "Correct Answer : " . $stSugar . "<br>";

if($stSize != $size)
{
	$numberCorrect++;
}
if($stMovie != $movie)
{
	$numberCorrect++;
}
if($stMars != $mars)
{
	$numberCorrect++;
}
if($stPaper != $paper)
{
	$numberCorrect++;
}
if($stSugar != $sugar)
{
	$numberCorrect++;
}

echo "<br> You got a : " . ($numberCorrect / 5) . " on this test!<br>";
?>