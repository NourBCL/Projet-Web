<?PHP
   require_once '../config.php';
   require_once '../Model/details.php';

    class DetailsC {

        function ajouterDet($details){
			$sql="INSERT INTO eventdetails (image1 , title1, description1 , title2 , description2 , map , gallery1 , gallery2 , gallery3 , gallery4 , gallery5 , gallery6) 
			VALUES (:image1 , :title1 , :description1 , :title2 , :description2 , :map , :gallery1 , gallery2 , gallery3 , gallery4 , gallery5 , gallery6)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'image1' => $details->getImage1Details(),
                    'title1' => $details->getTitle1Details(),
					'description1' => $details->getDescription1Details(),
                    'title2' => $details->getTitle2Details(),
                    'description2' => $details->getDescription2Details(),
                    'map' => $details->getMapDetails(),
                    'gallery1' => $details->getGallery1Details(),
                    'gallery2' => $details->getGallery2Details(),
                    'gallery3' => $details->getGallery3Details(),
                    'gallery4' => $details->getGallery4Details(),
                    'gallery5' => $details->getGallery5Details(),
                    'gallery6' => $details->getGallery6Details()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
        function afficherDet(){
			
			$sql="SELECT * FROM eventdetails ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
        }
        function modifierEvn($details, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE event SET 
						id = :id, 
						image1 = :image1,
						title1 = :title1,
						description1 = :description1,
                        title2 = :title2,
						description2 = :description2,
						gallery1 = :gallery1, 
                        gallery2 = :gallery2,
                        gallery3 = :gallery3,
                        gallery4 = :gallery4,
                        gallery5 = :gallery5,
						gallery6 = :gallery6
						
					WHERE id = :id'
				);
				$query->execute([
					'id' => $details->getIdDet(),
					'image1' => $details->getImage1Det(),
					'title1' => $details->getTitle1Det(),
                    'description1' => $details->getDescription1Det(),
                    'title2' => $details->getTitle2Det(),
					'description2' => $details->getDescription2Det(),
					'gallery1' => $details->getGallery1Det(),
					'gallery2' => $details->getGallery2Det(),
                    'gallery3' => $details->getGallery3Det(),
                    'gallery4' => $details->getGallery4Det(),
                    'gallery5' => $details->getGallery5Det(),
                    'gallery6' => $details->getGallery6Det(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
        }

        function supprimerDet($id){
			$sql="DELETE FROM eventdetails WHERE id= :id";
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
      
    }
    ?>