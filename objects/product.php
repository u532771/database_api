<?php
class Product
{
   // database connectie en tabel-naam
   private $conn;
   private $table_name = "product";
   // object properties
   public $id;
   // constructor with $db as database connection
   public function __construct($db)
   {
       $this->conn = $db;
   }
   // read products
   function read()
   {
       // select all query
       $query = "SELECT * FROM " . $this->table_name;
       $result = $this->conn->query($query);
       return $result;
   }

   function read_one($id){
        
        $query = "SELECT * FROM `product` WHERE id = $id";
        $result = $this->conn->query($query);
        
        return $result;
   }

   function delete($id){

        $query = "DELETE FROM `product` WHERE id= $id";
        $result = $this->conn->query($query);
        header("Refresh:0; url=index.php");
   }

   function create($naam, $beschrijving, $prijs, $categorie, $toegevoegd_op, $gewijzigd_op){
    $query = "INSERT INTO `product` (naam, beschrijving, prijs, categorie_id, toegevoegd_op, gewijzigd_op) VALUES ('$naam', '$beschrijving', $prijs, $categorie, $toegevoegd_op, $gewijzigd_op)" or die(mysqli_error($this->conn));
    $result = $this->conn->query($query);
    header("Refresh:0; url=index.php");
   }

   function update($id, $naam, $beschrijving, $prijs, $categorie, $gewijzigd_op){
    $query = "UPDATE `product` SET naam = '$naam', beschrijving = $beschrijving, prijs = $prijs, categorie_id = $categorie, gewijzigd_op = $gewijzigd_op WHERE id = $id;" or die(mysqli_error($this->conn));
    $result = $this->conn->query($query);
    // header("Refresh:0; url=index.php");
   }
}