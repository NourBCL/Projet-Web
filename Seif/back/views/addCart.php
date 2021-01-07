<?php 
require_once '../Controller/cartC.php';
$cartC=new cartC();

if (isset($_POST["id_product"])) {
    if(!empty($_POST["id_product"])) {
        $prodList=$cartC->retrieveProduct($_POST["id_product"]);
        $cartC->addCart($_POST["id_product"], $prodList["name"], $prodList["price"], $prodList["descr"]);
        header('Location:../View/index.php');
    }
    else {
        header('Location:../View/index.php');
    }
}
?>