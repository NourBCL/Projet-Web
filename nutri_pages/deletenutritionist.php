<?php
    include 'nutritionistsC.php';
    
    $nutritionistC=new nutritionistC();
    if(isset($_POST["id"])) {
        $nutritionistC->deletenutritionists($_POST['id']);
		header('Location:CoolAdmin-master/nutri_admin.php');
    }
?>