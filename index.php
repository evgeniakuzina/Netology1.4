<?php

require("functions.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Weather forecast</title>
</head>
<body>
    <?php if (isset($weather)): ?>
        <p><?php echo($weather); ?></p>
    <?php else: ?>
    <h1>City:</h1>
    <form action="" method="POST">
        <input type="text" name="q">
        <input type="submit" value="Search">
    </form>
    <?php endif; ?>
</body>
</html>
