<?php

$json = file_get_contents("http://api.openweathermap.org/data/2.5/find?q={$_GET['q']}&units=metric&appid=af16a194ec280290e5159489319cdd51");
$data = json_decode($json, true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Weather forecast for <?php echo $data["list"][0]["name"] ?></title>
</head>
<body>
	<p>Today in <?php echo $data["list"][0]["name"] ?>: <?php echo $data["list"][0]["weather"][0]["description"] ?>, temperature: <?php echo $data["list"][0]["main"]["temp"] ?> C.</p>
</body>
</html>