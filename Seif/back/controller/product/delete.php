
<?php

require "../../models/product.model.php";

$id = $_POST["id"];
$p = new Product();
$p->delete($id);
?>