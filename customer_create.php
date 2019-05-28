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
	$savepel = savespel($connection);

	header("Location: customer_read.php");
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

<form action="customer_create.php" method="post">
 <input type="hidden" name="isnew" id="isnew" value="1">

    <label>Namn:</label>
    <p><input type="text" name="txtName" placeholder="Ditt namn:"></p>

    <label>E-post:</label>
    <p><input type="email" name="txtEmail" placeholder="Din e-post:"></p>

    <label>Lösenord:</label>
    <p><input type="password" name="txtPassword" placeholder="Välj lösenord:"></p>

    <p><input type="submit" value="Lägg till"></p>
</form>
<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
