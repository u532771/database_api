<?php
include_once 'config/database.php';
include_once 'objects/product.php';

if(isset($_GET['del'])){
    $delete_id = $_GET['del'];

    $database = new Database();
    $db = $database->getConnection();
    $product = new Product($db);

    $result = $product->delete($delete_id);

}

?>