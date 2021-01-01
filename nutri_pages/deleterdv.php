<?php
    include 'rdvC.php';
    
    $rdvC=new rdvC();
    if(isset($_POST["id_nut"])) {
        $rdvC->deleteRdv($_POST['id_nut']);
		header('Location:CoolAdmin-master/admin_rdv.php');
    }
?>