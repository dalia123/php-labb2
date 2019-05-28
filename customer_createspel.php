<?php
/*
 * Lägger till ny kund
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/customer_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Lägga till ny kund?
if(isset($_POST['isnew']) && $_POST['isnew'] == 1){
	$savespel = savespel($connection);

	header("Location: customer_read.php");
}
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Lägg till nytt spel</title>
</head>

<body>
<h1>Lägg till nytt spel</h1>

<form action="customer_createspel.php" method="post">
 <input type="hidden" name="isnew" id="isnew" value="1">

    <label>spelNamn:</label>
    <p><input type="text" name="txtName" placeholder="Prince of Persia:"></p>

    <label>:</label>
		<label>spelBolag:</label>
		<p><input type="text" name="txtspelBolag" placeholder="Ubisoft:"></p>

		<label>spelUtgivningsar:</label>
		<p><input type="text" name="txtspelUtgivningsar" placeholder="Oktober 3, 1889:"></p>

		<label>spelBeskrivning:</label>
		<p><input type="text" name="txtspelBeskrivning" placeholder="Du är en prins som har uppdrag att beskydda rikedomen Persien:"></p>

		<label>spelKategoriId:</label>
		<p><input type="text" name="txtspelKategoriId" placeholder="Äventyrspel och strategispel:"></p>-->
    <p><input type="submit" value="Lägg till"></p>
</form>



<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
