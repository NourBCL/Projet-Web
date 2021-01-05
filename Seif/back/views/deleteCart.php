<?php
    require_once '../Controller/cartC.php';
    
    $cartC=new cartC();
    if(isset($_POST["id_product"])) {
        $cartC->deleteCart($_POST['id_product']);
		header('Location:adminCart.php');
    }
?>