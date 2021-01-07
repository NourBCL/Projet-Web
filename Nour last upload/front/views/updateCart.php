<?php

    require_once '../Controller/cartC.php';
    $cartC=new cartC();

    if (isset($_POST["id_product"]) &&
    isset($_POST["quantitys"])) {
        if(!empty($_POST["id_product"]) &&
        !empty($_POST["quantitys"])) {
            $cartC->updateQuantity($_POST['quantitys'], $_POST['id_product']);
            // die($_POST["id_product"]);
            header('Location:Cart.php');
        }
    }
?>