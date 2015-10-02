<!DOCTYPE html>
<html>
<body>

<form method="GET">
	<input type="text" name="expression">
	<input type="submit" value="calculate">
</form>

<?php

$expression = $_GET["expression"];	// captured the expression from the form
$divideByZero = '#/0#'; // fill in pattern with regex
preg_match($divideByZero, $expression, $matches);

if ($matches[0]) {
	echo "ERROR: Division by zero.";
}
else {
	eval("\$answer = $expression;"); 
	echo "Your answer is: ";
	echo $expression . " = " . $answer;
}

?>

</body>
</html>
