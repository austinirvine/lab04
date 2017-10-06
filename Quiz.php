<?php

//access the global array called $_POST to get the values from the text fields
$size = $_POST["size"];
$movie = $_POST["movie"];
$mars = $_POST["mars"];
$paper = $_POST["paper"];
$sugar = $_POST["sugar"];

$stSize = "earth";
$stMovie = "moon";
$stMars = "maven";
$stPaper = "fifty";
$stSugar = "one-hundred-eleven";

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

$numberCorrect = 0;

if($stSize == $size)
{
	$numberCorrect+=1;
}
if($stMovie == $movie)
{
	$numberCorrect+=1;
}
if($stMars == $mars)
{
	$numberCorrect+=1;
}
if($stPaper == $paper)
{
	$numberCorrect+=1;
}
if($stSugar == $sugar)
{
	$numberCorrect+=1;
}

function TestCalc($numberCorrect)
{
	if($numberCorrect == 5)
	{
		return("100%");
	}
	else if($numberCorrect == 4)
	{
		return("80%");
	}
	else if($numberCorrect == 3)
	{
		return("60%");
	}
	else if($numberCorrect == 2)
	{
		return("40%");
	}
	else if($numberCorrect == 1)
	{
		return("20%");
	}
	else {
		return("0%");
	}
}

echo "<br> You got a " . TestCalc($numberCorrect) . " on this test!<br>";
?>
