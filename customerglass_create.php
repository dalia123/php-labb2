<?php
/*
 * Lägger till ny kund
*/

// Inkluderar filerna för databaskopplingen och funktioner
require("includes/conn_mysql.php");
require("includes/customerglass_functions.php");

// Skapar databaskopplingen
$connection = dbConnect();

// Lägga till ny kund?
if(isset($_POST['isnew']) && $_POST['isnew'] == 1){
	$customer = savecustomer($connection);

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

    <label>customer:</label>
    <p><input type="text" name="txtNameCustomer" placeholder="Ditt namn:"></p>

    <label>customer epost:</label>
    <p><input type="email" name="txtcustomerEmail" placeholder="Din e-post:"></p>

    <label>Customer Lösenord:</label>
    <p><input type="password" name="txtcustomerPassword" placeholder="Välj lösenord:"></p>

    <p><input type="submit" value="Lägg till"></p>
</form>
<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
