<?PHP
    class Category{
        private $id;
        private $nom;
        private $description;
        private $image;
        

        public function __construct($nom,$description,$image){

            $this->nom=$nom;
            $this->description=$description;
            $this->image=$image; 
            
        }

        function getId(){
            return $this->id;
        }

        function getNomCategory(){
            return $this->nom;
        }
        public function setNomCategory($nom){
             $this->nom=$nom;
        }

        function getDescriptionCategory(){
            return $this->description;
        }
        public function setDescriptionCategory($description){
             $this->description=$description;
        }

        function getImageCategory(){
            return $this->image;
        }
        public function setImageCategory($image){
             $this->image=$image;
        }
        
    }
?>
