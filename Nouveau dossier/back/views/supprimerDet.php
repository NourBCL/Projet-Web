<?PHP
	include "../controller/detailsC.php";

	$detailsC=new detailsC();
	
	if (isset($_POST["id"])){
		$detailsC->supprimerDet($_POST["id"]);
		header('Location:afficherDet.php');
	}

?>