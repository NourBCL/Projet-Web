<?PHP
	class Event{
		private $id;
		private $nom;
		private $image;
		private $lieu;
        private $description;
		private $categorie;
		private $date;
		
		
		public function __construct($nom,$image, $lieu,$description,$categorie,$date){
			
			$this->nom=$nom;
			$this->image=$image;
			$this->lieu=$lieu;
            $this->description=$description;		
			$this->categorie=$categorie;
			$this->date=$date;
			
		}
		
		function getIdEvent(){
			return $this->id;
		}
		function getNomEvent(){
			return $this->nom;
		}
		function getImageEvent(){
			return $this->image;
		}
		function getLieuEvent(){
			return $this->lieu;
		}
	
		function getDescriptionEvent(){
			return $this->description;
        }
		
		function getCategorieEvent(){
			return $this->categorie;
        }
		function getDateEvent(){
			return $this->date;
        }
public function setNomEvent($nom){
			 $this->nom=$nom;
		}
		public function setImageEvent($image){
			 $this->image=$image;
		}
		public function setLieuEvent($lieu){
			 $this->lieu=$lieu;
		}
		public function setDescriptionEvent($description) {
			 $this->description=$description;
        }
		
		public function setCategorieEvent($categorie) {
			$this->categorie=$categorie;
	   }
	   public function setDateEvent($date){
		return $this->date=$date;
	}
	
	}
?>
		