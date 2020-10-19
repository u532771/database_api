<?php
// required headers
// database connection will be here
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// read products will be here
// query products
$result = $product->read();
$num = $result->num_rows;
// check if more than 0 record found
if($num>0){
   // products array
  
   // product data ophalen
   

   echo "<table border = '1'>";
   echo "<tr>";
   echo "<form action='' method='post'>";
    echo "<th>Id</th>";
    echo "<th>Naam</th>";
    echo "<th>Beschrijving</th>";
    echo "<th>Prijs</th>";
    echo "<th>Categorie id</th>";
    echo "<th>Wijzigen</th>";
    echo "</tr>";


   while ($row = $result->fetch_assoc()){
   
   // set response code - 200 OK
   http_response_code(200);
//    var_dump($products_arr);

echo "<tr>";
echo "<form method='post'>";
echo("<td>".$row['id']."</td>");
echo("<td><input type='text' name='update_naam' value='".$row['naam']."'></td>");
echo("<td><input type='text' name='update_beschrijving' value='".$row['beschrijving']."'></td>");
echo("<td><input type='number' name='update_prijs' value='".$row['prijs']."'></td>");
echo("<td><input type='number' name='update_categorie' value='".$row['categorie_id']."'></td>");
echo("<td><input type='submit' name='update_submit' value='Wijzigen'></td>");
echo "</tr>";
echo "</form>";

if(isset($_POST['update_submit'])){
    $id = $row['id'];
    $naam = $_POST['update_naam'];
    $beschrijving = $_POST['update_beschrijving'];
    $prijs = $_POST['update_prijs'];
    $categorie = $_POST['update_categorie'];


    $result = $product->update($id, $naam, $beschrijving, $prijs, $categorie, 'NOW()');

}

}
} else{
   echo "Geen Producten gevonden.";
}
echo"<table>";
