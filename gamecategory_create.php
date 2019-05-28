<?php
/*
 * Lägger till ny kund
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/gamecategory_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Lägga till ny kund?
if(isset($_POST['isnew']) && $_POST['isnew'] == 1){
	$customer = savecategories($connection);

	header("Location: gamecategory_read.php");
}
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Lägg till ny kund</title>
</head>

<body>
<h1>Lägg till ny kund</h1>

<form action="gamecategory_create.php" method="post">
 <input type="hidden" name="isnew" id="isnew" value="1">

    <label>categories:</label>
    <p><input type="text" name="txtspelKategoriId" placeholder="Kategori:"></p>

    
    <p><input type="submit" value="Lägg till"></p>
</form>
<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
