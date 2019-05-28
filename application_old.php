<?php
require 'gamer.php';
require 'spel.php';

// Ny klass för Fish
require 'customer.php';

// Skapar ett objekt av Cow
$spel  = new spel('spel', 'användare', 'köper spel');

echo "<b>spel Object</b> <br>";
echo "The spel belongs to the " . $spel->getspelNamn() . " spelNamn <br>";
echo "and game category " . $spel->getspelKategoriId() . "<br>";
echo $spel->move() . "<br>";

// Använder set för att ändra värde på en privat variabel
$spel->setcustomerName('User');

echo "and ownes by " . $spel->getcustomerName() . "<br>";
// Visar storlek
echo "Size: " . $spel->getSize();
echo "<br><br>";

// Skapar ett objekt av fish
$customer  = new Customer('roligt', 'speltitel', 'användare', 'aktivitet');
echo "<b>Customer Object</b> <br>";
echo "The Customer belongs to the " . $customer->getspelNamn() . " spelNamn <br>";
echo "and plays " . $customer->getcustomerName() . "<br>";
echo $customer->move() . "<br>";
echo "customerName: " . $customer->getcustomerName() . "<br>";
?>
