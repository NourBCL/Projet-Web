<?PHP
   require_once '../config.php';
   require_once '../Model/categorie.php';

    class CategoryC {

        function ajouterCat($category){
			$sql="INSERT INTO categorie (nom , description , image) 
			VALUES (:nom , :description , :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'nom' => $category->getNomCategory(),
					'description' => $category->getDescriptionCategory(),
					'image' => $category->getImageCategory()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCat(){
			
			$sql="SELECT * FROM categorie ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerCat($id){
			$sql="DELETE FROM categorie WHERE id= :id";
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

		function modifierCat($category, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE event SET 
						id = :id, 
						nom = :nom,
						description = :description,
						image = :image
						
					WHERE id = :id'
				);
				$query->execute([
					'id' => $event->getIdCat(),
					'nom' => $event->getNomCat(),
					'description' => $event->getDescriptionCat(),
					'image' => $event->getImageCat(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCat($id){
			$sql="SELECT * from categorie where id=$id";
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
      
    }