<?PHP
	include "../controller/eventC.php";

	$eventC=new eventC();
	
	if (isset($_POST["id"])){
		$eventC->supprimerEvn($_POST["id"]);
		header('Location:afficherEvn.php');
	}

?>
