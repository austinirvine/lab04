<p?

//access the global array called $_POST to get the values from the text fields
$numberCorrect = 0;

$username = $_POST["username"];
$password = $_POST["password"];
$qEggs = $_POST["qEggs"];
$qMilk = $_POST["qMilk"];
$qBread = $_POST["qBread"];
$qSoul = $_POST["qSoul"];

echo "<br> Receipt of Purchase For: " . $username . " and with password: " . $password . "<br> ";

//create table and output stuff
echo "<br> You got a : " . ($numberCorrect / 5 * 100) . "% on this test!<br>";
?>