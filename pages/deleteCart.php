<?php
    require_once 'cartC.php';
    
    $cartC=new cartC();
    if(isset($_POST["id_product"])) {
        $cartC->deleteCart($_POST['id_product']);
		header('Location:Cart.php');
    }
?>