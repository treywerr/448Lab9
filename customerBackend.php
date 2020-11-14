$user = $_POST["username"];
$pass = $_POST["password"];
$apples = $_POST["apple"];
$bananas = $_POST["banana"];
$oranges = $_POST["orange"];
$shipping = $_POST["shipping"];

echo "<h2>Welcome " . $user . "<h2>";
echo "Your password is " . $pass . "<br>";
echo "<br><table>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";
echo "<tr><th>Apples</th><td>" . $apples . "</td><td>$1.50</td><td>$" . $apples*1.5 . "</td></tr>";