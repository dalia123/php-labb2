<?php

/*
  * Visar alla kunder
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/customer_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Visar alla kunder
$allGames = getspel($connection);
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Visa alla</title>
</head>

<body>
<h1>Spel</h1>
<p><a href="customer_createspel.php">Lägg till nytt spel</a></p>
<ul>
<?php
	// Loopar genom arrayen som innehåller alla kunder i tabellen
    while($row = mysqli_fetch_array($allGames)){
?>
 <li><?php echo $row['spelNamn'];?> <a href="customer_update.php?editid=<?php echo $row['spelId'];?>">Uppdatera</a> <a href="customer_delete.php?deleteid=<?php echo $row['spelId'];?>">Ta bort</a></li>
<?php
	}
?>
<br></br>
  <a href="application.php">Här kan du se oop koden över spelen!</a>

</ul>


<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
