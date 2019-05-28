<?php
/*
 * Visar alla kunder
*/
function getspel($conn){
    $query = "SELECT * FROM spel ORDER BY spelNamn";
     //$query = "SELECT * FROM customer ORDER BY customerName ASC";
    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    return $result;
}

/*
 * Hämtar en kund    //Create table , oop
 */
function getspelData($conn,$spelId){
    $query = "SELECT * FROM spel
			WHERE spelId=".$spelId;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

/*
 * Sparar en kund
*/
function savespel($conn){
    $date = date("Y-m-d H:i:s");
    $spelNamn = escapeInsert($conn,$_POST['txtName']);
    $spelBolag = escapeInsert($conn,$_POST['txtspelBolag']);
    $spelUtgivningsar = escapeInsert($conn,$_POST['txtspelUtgivningsar']);
    $spelKategoriId = escapeInsert($conn,$_POST['txtspelKategoriId']);
    $spelBeskrivning = escapeInsert($conn,$_POST['txtspelBeskrivning']);


    $query = "INSERT INTO spel
			(spelNamn, spelBolag, spelUtgivningsar, spelBeskrivning,spelKategoriId)
			VALUES('$spelNamn','$spelBolag', '$spelUtgivningsar','$spelBeskrivning',$spelKategoriId)";


    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $insId = mysqli_insert_id($conn);

    return $insId;
}

/*
 * Uppdaterar en kund
*/
function updatespel($conn){
    $spelNamn = escapeInsert($conn,$_POST['txtName']);
    $spelBolag = escapeInsert($conn,$_POST['txtspelBolag']);
    $spelUtgivningsar = escapeInsert($conn,$_POST['txtspelUtgivningsar']);
    $spelBeskrivning = escapeInsert($conn,$_POST['txtspelBeskrivning']);
    $spelKategoriId = escapeInsert($conn,$_POST['txtspelKategoriId']);
    $spelId = escapeInsert($conn,$_POST['txtspelId']);
    $editid = $_POST['txtspelId'];

    $query = "UPDATE spel
			SET spelNamn='$spelNamn',
      spelBolag='$spelBolag',
      spelUtgivningsar='$spelUtgivningsar',
      spelBeskrivning='$spelBeskrivning',
      spelKategoriId='$spelKategoriId'
			WHERE spelId=". $editid;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");
}

/*
 * Raderar kund
*/
function deleteallGames($conn,$spelId){
    $query = "DELETE FROM spel WHERE spelId=". $spelId;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");
}

/*
 * Tar bort oönskade html-tecken
 *
 * mysqli_real_escape_string motverkar SQLInjection
 */
function escapeInsert($conn,$insert) {
    $insert = htmlspecialchars($insert);

    $insert = mysqli_real_escape_string($conn,$insert);

    return $insert;
}
