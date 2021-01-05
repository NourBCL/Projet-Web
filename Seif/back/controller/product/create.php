<?php

require "../../models/product.model.php";


$name = $_POST["name"];
$price = $_POST["price"];
$categorie = $_POST["categorie"];
$image = $_FILES["image"]["tmp_name"];

$p = new Product();
$p->name = $name;
$p->price = $price;
$p->categorie = $categorie;
$p->image = $image;
$p->insert();


?>