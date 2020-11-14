<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo "1. What letter comes after q?<br>";
echo "	You answered: " . $q1;
echo "<br>	Correct answer: r<br><br>";
echo "2. In what year did the Defenestrations of Prague occur?<br>";
echo "	You answered: " . $q2;
echo "<br>	Correct answer: 1618<br><br>";
echo "3. What is heavier, one ton of feathers or one ton of lead?<br>";
echo "	You answered: " . $q3;
echo "<br>	Correct answer: They weigh the same<br><br>";
echo "4. What is the general chemical formula for the mineral Turquoise?<br>";
echo "	You answered: " . $q4;
echo "<br>	Correct answer: Cu(Al,Fe<sup>3+</sup>)<sub>6</sub>[(OH)<sub>4</sub>|(PO)<sub>2</sub>]<sub>2</sub>&middot;4H<sub>2</sub>O<br><br>";
echo "5. What is 2+2?<br>";
echo "	You answered: " . $q5;
echo "<br>	Correct answer: 5<br><br>";

$score = 0;
if ($q1 == "r") {
	$score++;
}
if ($q2 == "1618") {
	$score++;
}
if ($q3 == "same") {
	$score++;
}
if ($q4 == "Cu") {
	$score++;
}
if ($q5 == "5") {
	$score++;
}

echo "Total correct: " . $score;
$percent = ($score/5)*100;
echo "<br>" . $percent . "%";
?>