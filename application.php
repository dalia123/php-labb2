
<?php
require 'spel.php';
require 'gamer.php';

// Skapar ett objekt av Cow
//$spel  = new Gamer('spel', 'köper spel');
$spel  = new Gamer('köper spel',"Spelid");

echo "<b>spel Object</b> <br>";
echo "The spel belongs to the " . $spel->getspelNamn() . " spelNamn <br>";
echo "and game category " . $spel->getspelKategoriId() . "<br>";
echo $spel->showSpel() . "<br>";
?>
