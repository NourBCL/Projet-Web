<?PHP
	include "../config.php";
	require_once '../Model/event.php';

	class eventC {
		
		function afficherEvn(){
			
			$sql="SELECT * FROM event";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function choseCategory($nom) {
            $sql="SELECT * FROM event WHERE categorie = '$nom'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            } 
		}
		function choseDetails($details) {
            $sql="SELECT * FROM eventdetails ='$details'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            } 
        }
	}

?>