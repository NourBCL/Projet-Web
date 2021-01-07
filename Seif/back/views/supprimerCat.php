<?PHP
	include "../controller/categorieC.php";

	$categoryC=new categoryC();
	
	if (isset($_POST["id"])){
		$categoryC->supprimerCat($_POST["id"]);
		header('Location:afficherCat.php');
	}

?>