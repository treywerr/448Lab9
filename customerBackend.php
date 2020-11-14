<?php

$user = $_POST["username"];
$pass = $_POST["password"];
$apples = $_POST["apple"];
$appleCost = $apples*1.5;
$bananas = $_POST["banana"];
$bananaCost = $bananas*3.75;
$oranges = $_POST["orange"];
$orangeCost = $oranges*2;
$shipping = $_POST["shipping"];
$shippingCost = 0;
if ($shipping == "Overnight") {
	$shippingCost = 50;
} else if ($shipping == "3-day") {
	$shippingCost = 5;
}

echo "<h2>Welcome " . $user . "<h2>";
echo "Your password is " . $pass . "<br>";
echo "<br><table>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";
echo "<tr><th>Apples</th><td>" . $apples . "</td><td>$1.50</td><td>$" . $apples*1.5 . "</td></tr>";
echo "<tr><th>Bananas</th><td>" . $bananas . "</td><td>$3.75</td><td>$" . $bananas*3.75 . "</td></tr>";
echo "<tr><th>Oranges</th><td>" . $oranges . "</td><td>$2.00</td><td>$" . $oranges*2 . "</td></tr>";
echo "<tr><th>Shipping</th><td>" . $shipping . "</td><td></td><td>$" . $shippingCost . "</td></tr>";
echo "<tr><td></td><td></td><th>Total Cost</th><th>$" . $appleCost+$bananaCost+$orangeCost+$shippingCost . "</th></tr></table>";

?>