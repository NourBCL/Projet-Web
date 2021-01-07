<?php
    include_once '../Model/details.php';
    include_once '../Controller/detailsC.php';

    $error = "";

    // create user
    $details = null;

    // create an instance of the controller
    $evC = new detailsC();
    var_dump($_POST["image1"]);
    if (
       
        isset($_POST["image1"]) &&
        isset($_POST["title1"]) && 
        isset($_POST["description1"]) &&
        isset($_POST["title2"]) &&
        isset($_POST["description2"]) &&
        isset($_POST["map"]) &&
        isset($_POST["gallery1"]) &&
        isset($_POST["gallery2"]) &&
        isset($_POST["gallery3"]) &&
        isset($_POST["gallery4"]) &&
        isset($_POST["gallery5"]) &&
        isset($_POST["gallery6"]) &&
        isset($_POST["date"]) 
        
    ) {
        if (
            
            !empty($_POST["image1"]) && 
            !empty($_POST["title1"]) && 
            !empty($_POST["description1"]) &&
            !empty($_POST["title2"]) && 
            !empty($_POST["description2"]) && 
            !empty($_POST["map"]) && 
            !empty($_POST["gallery1"]) && 
            !empty($_POST["gallery2"]) && 
            !empty($_POST["gallery3"]) && 
            !empty($_POST["gallery4"]) && 
            !empty($_POST["gallery5"]) && 
            !empty($_POST["gallery6"]) &&
            !empty($_POST["date"])
        ) {
            $details = new details(
                
                $_POST['image1'], 
                $_POST['title1'],
                $_POST['description1'] ,
                $_POST['title2'],
                $_POST['description2'],
                $_POST['map'],
                $_POST['gallery1'],
                $_POST['gallery2'],
                $_POST['gallery3'],
                $_POST['gallery4'],
                $_POST['gallery5'],
                $_POST['gallery6'],
                $_POST['date']
            );
            $evC->ajouterDet($details);
           // header('Location:afficherEvn.php');
        }
        else
            $error = "Missing information";
    }
?>