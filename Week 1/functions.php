<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Functions</title>
<meta charset="utf-8">
<meta name="description" content="Use of PHP built-in functions">
<meta name="keywords" content="HTML">
<meta name="author" content="Hoang Bao Phuc Chau">
</head>
<body>
<h1>Use of PHP built-in functions</h1>
<?php
/*Use of abs () and pow () built-in functions, and echo statement. */
echo "<p>Absolute value of -5 is ", abs (-5), ". </p>";
echo "<p>3 to the power of 4 is ", pow (4, 3), ". </p>";
/* Use of decbin() and bindec() functions. */
echo "<p>Decimal equivalent of 101101 is: ", bindec(101101),".</p>";
echo "<p>Binary equivalent of 69 is: ", decbin(69),".</p>";
?>
</body>
</html>