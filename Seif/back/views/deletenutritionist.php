<?php
    include '../Controller/nutritionistsC.php';
    
    $nutritionistC=new nutritionistC();
    if(isset($_POST["id"])) {
        $nutritionistC->deletenutritionists($_POST['id']);
		header('Location:nutri_admin.php');
    }
?>