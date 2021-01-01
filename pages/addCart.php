<?php 
require_once 'cartC.php';
$cartC=new cartC();

if (isset($_POST["id_product"])) {
    if(!empty($_POST["id_product"])) {
        $kkbro=$cartC->verify($_POST["id_product"]);
        // $tOf=$kkbro['count'];
        if($kkbro==false) {
            $prodList=$cartC->retrieveProduct($_POST["id_product"]);
            $cartC->addCart($_POST["id_product"], $prodList["name"], $prodList["price"], $prodList["descr"]);
            header('Location:index.php');
        }
        else {
            $cartC->updateQuantityPlus($_POST["id_product"]);
            header('Location:index.php');
        }
    }
    else {
         header('Location:index.php');
    }
}
?>