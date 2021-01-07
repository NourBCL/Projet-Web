<?php
    include '../Controller/rdvC.php';
    
    $rdvC=new rdvC();
    if(isset($_POST["id_nut"])) {
        $rdvC->deleteRdv($_POST['id_nut']);
		header('Location:admin_rdv.php');
    }
?>