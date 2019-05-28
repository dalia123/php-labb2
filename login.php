<?php

require("includes/conn_mysql.php");
require("includes/customer_functions.php");

$connection = dbConnect();

$allGames = getspel($connection);
?>
<!DOCTYPE HTML>
<htlm>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title></title>
  </head>
  <body>
    <?php echo 'Du har loggat in!';?>
    <a href="customer_read.php">Här kan du utforska spel världen som vi erbjuder!</a>
    <?php
// rafinera Variablerna inloggning
/*$kontoAnvandarnamn = $_POST['kontoAnvandarnamn'];
$kontoLosenord = $_POST['kontoLosenord'];
$kontoAnvandarnamn == "Maluma"
$kontoLosenord == "Jbalvin"


//kontroll av inloggning
if($kontoAnvandarnamn == "Maluma"){
  $kontoLosenord = "Jbalvin";
}

if(isset($_POST['kontoAnvandarnamn'])){
  if($alder == true ){
    echo "<br> Du är inloggad";
  }elseif($alder == false){
    echo "<br> Fel!";
  }echo "Du har loggat in";?>*/?>




<?php
dbDisconnect($connection);
?>
</body>
</html>
