<?php
/*
  * Visar alla kunder
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/gamecategory_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Visar alla kunder
$allCategories = getcategories($connection);
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Visa alla</title>
</head>

<body>
<h1>Spel</h1>


<?php
	// Loopar genom arrayen som innehåller alla kunder i tabellen
    while($row = mysqli_fetch_array($allCategories)){
?>
 <li><?php echo $row['spelNamn'];?>
    <?php echo $row['kategoriGenre'];?></li>
<?php
	}
?>
</ul>


<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
