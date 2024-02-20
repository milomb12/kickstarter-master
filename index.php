<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php

include ("includes/navbar.php")

?>

<?php

$birthYear = 2000;

if ($birthYear < 1990) {
    echo "Du er gammel";
} else if ($birthYear >= 1990 && $birthYear < 2000) {
    echo "Du er 90'er barn";
} else if ($birthYear == 2000) {
    echo "Du er millenium barn";
} else {
    echo "Du er født efter 2000";
}
?>

<br>
<br>

<?php
$tal = ["nr1" => 232, "nr2" => 235, "nr3" => 5464, "nr4" => 697];

foreach($tal as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
