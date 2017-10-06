<?php

//access the global array called $_POST to get the values from the text fields
$numberCorrect = 0;

$username = $_POST["username"];
$password = $_POST["password"];
$qEggs = $_POST["qEggs"];
$qMilk = $_POST["qMilk"];
$qBread = $_POST["qBread"];
$qSoul = $_POST["qSoul"];
$ship = $_POST["shipping"];
$shipCost = 0;

echo "<br> Receipt of Purchase For: " . $username . " and with password: " . $password . "<br> ";
ZeroSet();
function ZeroSet()
{
  if($qEggs.length == 0) {$qEggs = 0;}
  if($qMilk.length == 0) {$qMilk = 0;}
  if($qBread.length == 0) {$qBread = 0;}
  if($qSoul.length == 0) {$qSoul = 0;}
}

//create table and output stuff
$eggCost = $qEggs*0.10;
$milkCost = $qMilk*2.00;
$breadCost = $qBread*1.00;
$soulCost = $qSoul*50.00;

if($ship == free || $ship == pickup){$shipCost = 0;}
else if($ship == overnight){$shipCost = 50;}
else if($ship == three){$shipCost = 5;}

$totCost = $shipCost+$eggCost+$milkCost+$breadCost+$soulCost;

echo "<table><td>";
echo " Product ";
echo "<td>";
echo " Amount ";
echo "<td>";
echo " Price ";
echo "<tr>";
echo "<td>";
echo "Eggs";

if($qEggs.length == 0)
{
  echo "<td>0";
}
else {
  echo "<td>" . $qEggs;
}
echo "<td>$" . $eggCost;
echo "<tr>";
echo "<td>";
echo "Milk";
if($qMilk.length == 0)
{
  echo "<td>0 gallons";
}
else {
  echo "<td>" . $qMilk . " gallons";
}
echo "<td>$" . $milkCost;
echo "<tr>";
echo "<td>";
echo "Bread";
if($qBread.length == 0)
{
  echo "<td>0 loafs";
}
else {
  echo "<td>" . $qBread . " loafs";
}
echo "<td>$" . $breadCost;
echo "<tr>";
echo "<td>";
echo "Your Soul";
if($qSoul.length == 0)
{
  echo "<td>0 pounds";
}
else {
  echo "<td>" . $qSoul . " pounds";
}
echo "<td>$" . $soulCost;
echo "<tr>";
echo "<td>";
echo "Shipping";
echo "<td><td>$" . $shipCost;
echo "<tr>";
echo "<td>";
echo "Total Cost of Order";
echo "<td><td>$" . $totCost;
echo "</table>";
?>
