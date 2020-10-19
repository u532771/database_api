<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
// instantiate database and product object


if(isset($_POST['create_submit'])){
    $database = new Database();
    $db = $database->getConnection();
    
    
    $naam = $_POST['create_naam_input'];
    $beschrijving = $_POST['create_beschrijving_input'];
    $prijs = $_POST['create_prijs_input'];
    $categorie = $_POST['create_categorie_input'];

    // initialize object
    $product = new Product($db);
    // read products will be here
    // query products
    $create = $product->create($naam, $beschrijving, $prijs, $categorie, 'NOW()', 'NOW()');

        
}

?>
    