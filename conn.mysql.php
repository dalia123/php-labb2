<?php
function dbConnect(){
  $connection = mysqli_connect('localhost', 'root', "", "labb2-spel")
  or die("Could not connect");
  mysli_select_db($connection,"labb2-spel") or die("Could not select database");
  return $connection;
}

function dbDisconnect($connection){
  mysqli_close($connection);
}?>
