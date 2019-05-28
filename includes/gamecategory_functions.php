<?php
/*
 * Visar alla kategorier*/
function getcategories($conn){
    $query = "SELECT * FROM kategori INNER JOIN spel ON kategori.kategoriId = spel.spelKategoriId";

     //$query = "SELECT * FROM customer ORDER BY customerName ASC";
    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    return $result;
}

/*
 * Hämtar en kund
 */
function getcategoriesData($conn,$spelKategoriId){
    $query = "SELECT * FROM categories
			WHERE spelKategoriId=".$spelKategoriId;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $row = mysqli_fetch_assoc($result);

    return $row;
}?>
