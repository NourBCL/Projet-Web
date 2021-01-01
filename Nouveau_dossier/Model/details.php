<?PHP
    class Details{
        private $id;
        private $image1;
        private $title1;
        private $description1;
        private $title2;
        private $description2;
        private $map;
        private $gallery1;
        private $gallery2;
        private $gallery3;
        private $gallery4;
        private $gallery5;
        private $gallery6;
        

        public function __construct($image1,$title1, $description1, $title2, $description2, $map, $gallery1, $gallery2, $gallery3, $gallery4, $gallery5, $gallery6 ){

            $this->image=$image;
            $this->title1=$title1;
            $this->description1=$description1; 
            $this->title2=$title2; 
            $this->description2=$description2; 
            $this->map=$map; 
            $this->gallery1=$gallery1; 
            $this->gallery2=$gallery2; 
            $this->gallery3=$gallery3; 
            $this->gallery4=$gallery4; 
            $this->gallery5=$gallery5;
            $this->gallery6=$gallery6;  
        }

        function getId(){
            return $this->id;
        }

        function getImage1Details(){
            return $this->image1;
        }
        public function setNomDetails($image1){
             $this->image1=$image1;
        }

        function getTitle1Details(){
            return $this->title1;
        }
        public function setTitle1Details($title1){
             $this->title1=$title1;
        }

        function getDescription1Details(){
            return $this->description1;
        }
        public function setDescription1Details($description1){
             $this->description1=$description1;
        }
        function getTitle2Details(){
            return $this->title2;
        }
        public function setTitle2Details($title2){
             $this->title2=$title2;
        }
        function getDescription2Details(){
            return $this->description2;
        }
        public function setDescription2Details($description2){
             $this->description2=$description2;
        }
        function getMapDetails(){
            return $this->map;
        }
        public function setMapDetails($map){
             $this->map=$map;
        }
        function getGallery1Details(){
            return $this->gallery1;
        }
        public function setGallery1Details($gallery1){
             $this->gallery1=$gallery1;
        }
        function getGallery2Details(){
            return $this->gallery2;
        }
        public function setGallery2Details($gallery2){
             $this->gallery2=$gallery2;
        }
        function getGallery3Details(){
            return $this->gallery3;
        }
        public function setGallery3Details($gallery3){
             $this->gallery3=$gallery3;
        }
        function getGallery4Details(){
            return $this->gallery4;
        }
        public function setGallery4Details($gallery4){
             $this->gallery4=$gallery4;
        }
        function getGallery5Details(){
            return $this->gallery5;
        }
        public function setGallery5Details($gallery5){
             $this->gallery5=$gallery5;
        }
        function getGallery6Details(){
            return $this->gallery6;
        }
        public function setGallery6Details($gallery6){
             $this->gallery6=$gallery6;
        }
    }
?>
