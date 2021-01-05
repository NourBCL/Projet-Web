<?php
    include_once '../Model/event.php';
    include_once '../Controller/eventC.php';

    $error = "";

    // create user
    $event = null;

    // create an instance of the controller
    $evC = new eventC();
    if (
       
        isset($_POST["nom"]) &&
        isset($_POST["date"]) && 
        isset($_POST["lieu"]) &&
        isset($_POST["description"]) &&
        isset($_POST["categorie"]) &&
        isset($_POST["image"])
    ) {
        if (
            
            !empty($_POST["nom"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["lieu"]) &&
            !empty($_POST["description"]) && 
            !empty($_POST["categorie"]) && 
            !empty($_POST["image"]) 
        ) {
            $event = new event(
                
                $_POST['nom'], 
                $_POST['date'],
                $_POST['lieu'] ,
                $_POST['description'],
                $_POST['categorie'],
                $_POST['image']
            );
            $evC->ajouterEvn($event);
           // header('Location:afficherEvn.php');
        }
        else
            $error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <script src="script.js"></script>
    <!-- Title Page-->
    <title>Events</title>
    
  <?php
    include ('style.php');
  ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php
            include ('header.php');
        ?>
            <!-- HEADER DESKTOP-->


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                            
                             
                            <!--***********************************************************************************-->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Event</strong> 
                                        <div id="erreur"></div>
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" method="POST"  class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nom" name="nom" placeholder="name" class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date-input" class=" form-control-label">Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="date" placeholder="date" class="form-control">
                                                    <!--<small class="help-block form-text">Please enter your email</small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="place-input" class=" form-control-label">Place</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="lieu" name="lieu" placeholder="place" class="form-control">
                                                   <!-- <small class="help-block form-text">Please enter a complex password</small>-->
                                                </div>
                                            </div>
                                         
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Decription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="categorie" class=" form-control-label">Categorie</label>
                                                </div>
                                               
                                                <input type="radio" name=categorie value="sport" id="categotie"> sport
                                                <input type="radio" name=categorie value="outing" id="categotie"> outing
                                                <input type="radio" name=categorie value="training" id="categotie"> training

                                            </div>
                                        
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Event's picture</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                            
                                        <button type="submit" class="btn btn-primary btn-sm" name="Add" value="Add" onclick="return verif_ajout();">
                                            <i class="fa fa-dot-circle-o"></i> Add
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                 
                                 <!--********************************************************************************************-->
                                 
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
        include ('style2.php');
    ?>
</body>

</html>
<!-- end document-->
