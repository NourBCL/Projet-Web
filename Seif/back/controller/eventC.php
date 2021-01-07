<?PHP
	include "../config.php";
	require_once '../Model/event.php';

	class eventC {
		
		function ajouterEvn($event){
			$sql="INSERT INTO event (id , nom, date, lieu, description, categorie, image  ) 
			VALUES (:id,:nom,:date, :lieu , :description , :categorie , :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id' => $event->getIdEvent(),
					'nom' => $event->getNomEvent(),
					'date' => $event->getDateEvent(),
					'lieu' => $event->getLieuEvent(),
					'description' => $event->getDescriptionEvent(),
					'categorie' => $event->getCategorieEvent(),
					'image' => $event->getImageEvent(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
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

		function supprimerEvn($id){
			$sql="DELETE FROM event WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierEvn($event, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE event SET 
						id = :id, 
						nom = :nom,
						date = :date,
						lieu = :lieu,
						description = :description,
						categorie = :categorie, 
						image = :image
						
					WHERE id = :id'
				);
				$query->execute([
					'id' => $event->getIdEvent(),
					'nom' => $event->getNomEvent(),
					'date' => $event->getDateEvent(),
					'lieu' => $event->getLieuEvent(),
					'description' => $event->getDescriptionEvent(),
					'categorie' => $event->getCategorieEvent(),
					'image' => $event->getImageEvent(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererEvent($id){
			$sql="SELECT * from event where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function choseCategory($category) {
            $sql="SELECT * FROM event WHERE categorie = '$category'";
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