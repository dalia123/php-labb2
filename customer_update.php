<?php
/*
 * Visar alla kunder
*
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/customer_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Skall kunden redigeras?
if(isset($_GET['editid']) && $_GET['editid'] > 0 ){
	$allGames = getspelData($connection,$_GET['editid']);
}

// Skall kunden uppdateras?
if(isset($_POST['txtspelId']) && $_POST['txtspelId'] > 0){
	updatespel($connection);

	header("Location: customer_update.php?editid=".$_POST['txtspelId']);
}
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Uppdatera kund</title>
</head>

<body>
<h1>Uppdatera <?php echo $allGames['spelId']; ?></h1>
<p><a href="customer_read.php">Tillbaka</a></p>

<form action="customer_update.php" method="post">
   	<input type="hidden" name="txtspelId" value="<?php echo $allGames['spelId']; ?>">

    <label>Namn:</label>
    <p><input type="text" name="txtName" value="<?php echo $allGames['spelNamn']; ?>"></p>

		<label>Bolag:</label>
		<p><input type="text" name="txtspelBolag" value="<?php echo $allGames['spelBolag']; ?>"></p>

		<label>Utgivningsår:</label>
    <p><input type="text" name="txtspelUtgivningsar" value="<?php echo $allGames['spelUtgivningsar']; ?>"></p>

		<label>Beskrivning:</label>
    <p><input type="text" name="txtspelBeskrivning" value="<?php echo $allGames['spelBeskrivning']; ?>"></p>

		<label>Genre:</label>
    <p><input type="text" name="txtspelKategoriId" value="<?php echo $allGames['spelKategoriId']; ?>"></p>

    <p><input type="submit" value="Uppdatera"></p>
</form>
<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
